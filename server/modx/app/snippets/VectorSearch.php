<?php
header('Content-Type: application/json; charset=utf-8');

/* =========================================================
 *  КОНФИГУРАЦИЯ
 * ========================================================= */

// --- Подключение к PostgreSQL (там лежат эмбеддинги) ---
$pgHost     = 'postgres';
$pgPort     = '5432';
$pgDbName   = 'modx';
$pgUser     = 'modx';
$pgPassword = 'secret';

// --- Таблица и колонки в PostgreSQL ---
$pgTable          = 'resource_embeddings';     // таблица с векторами
$pgEmbeddingCol   = 'embedding';      // колонка типа vector(N)
$pgResourceIdCol  = 'resource_id';    // колонка с id ресурса MODX

// --- Метрика расстояния pgvector ---
// '<=>' — косинусное расстояние (обычно то, что нужно для эмбеддингов Ollama)
// '<->' — евклидово (L2)
// '<#>' — скалярное произведение (negative inner product)
$distanceOperator = '<=>';

// --- Ожидаемая размерность вектора (0 — не проверять) ---
$expectedDimensions = 0; // например 768 или 1024 — под вашу модель Ollama

/* ========================================================= */

/* ---------- Проверка метода ---------- */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    return json_encode(['error' => 'Метод не разрешён, используйте POST'], JSON_UNESCAPED_UNICODE);
}

/* ---------- Чтение и разбор JSON-тела запроса ---------- */
$raw  = file_get_contents('php://input');
$body = json_decode($raw, true);

if (json_last_error() !== JSON_ERROR_NONE || !is_array($body)) {
    http_response_code(400);
    return json_encode(['error' => 'Некорректный JSON в теле запроса'], JSON_UNESCAPED_UNICODE);
}

$vector = $body['search'] ?? null;

if (!is_array($vector) || empty($vector)) {
    http_response_code(400);
    return json_encode(['error' => 'Поле "search" должно быть непустым массивом чисел (вектор)'], JSON_UNESCAPED_UNICODE);
}

/* ---------- Валидация вектора: только числа ---------- */
$floats = [];
foreach ($vector as $v) {
    if (!is_numeric($v)) {
        http_response_code(400);
        return json_encode(['error' => 'Вектор "search" содержит нечисловое значение'], JSON_UNESCAPED_UNICODE);
    }
    $floats[] = (float) $v;
}

if ($expectedDimensions > 0 && count($floats) !== $expectedDimensions) {
    http_response_code(400);
    return json_encode([
        'error' => "Неверная размерность вектора: ожидалось $expectedDimensions, получено " . count($floats),
    ], JSON_UNESCAPED_UNICODE);
}

// Строка вида "[0.123,-0.45,0.221]" для приведения к типу vector в PostgreSQL.
// Безопасно: все элементы прошли is_numeric() и приведены к float, инъекция исключена.
$vectorLiteral = '[' . implode(',', $floats) . ']';

/* ---------- Валидатор идентификаторов (для имён таблиц/колонок из конфига) ---------- */
function safe_ident($name) {
    return preg_match('/^[A-Za-z0-9_]+$/', (string) $name) ? $name : null;
}

$pgTableSafe   = safe_ident($pgTable);
$embColSafe    = safe_ident($pgEmbeddingCol);
$resIdColSafe  = safe_ident($pgResourceIdCol);
$allowedOps    = ['<=>', '<->', '<#>'];

if (!$pgTableSafe || !$embColSafe || !$resIdColSafe || !in_array($distanceOperator, $allowedOps, true)) {
    http_response_code(500);
    return json_encode(['error' => 'Некорректная конфигурация PostgreSQL-части сниппета'], JSON_UNESCAPED_UNICODE);
}

/* ---------- Шаг 1: поиск ближайшего вектора в PostgreSQL ---------- */
$resourceId = null;
$distance   = null;

try {
    $dsn = "pgsql:host=$pgHost;port=$pgPort;dbname=$pgDbName";
    $pg  = new PDO($dsn, $pgUser, $pgPassword, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    $sql = "SELECT \"$resIdColSafe\" AS resource_id, \"$embColSafe\" $distanceOperator :vec AS distance
            FROM \"$pgTableSafe\"
            ORDER BY \"$embColSafe\" $distanceOperator :vec
            LIMIT 1";

    $stmt = $pg->prepare($sql);
    $stmt->bindValue(':vec', $vectorLiteral);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        http_response_code(404);
        return json_encode(['error' => 'Совпадений не найдено'], JSON_UNESCAPED_UNICODE);
    }

    $resourceId = (int) $row['resource_id'];
    $distance   = (float) $row['distance'];

} catch (Exception $e) {
    http_response_code(500);
    return json_encode(['error' => 'Ошибка запроса к PostgreSQL', 'details' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}

/* ---------- Шаг 2: получение ресурса MODX из MariaDB по resource_id ---------- */
try {
    $resource = $modx->getObject('modResource', $resourceId);

    if (!$resource) {
        http_response_code(404);
        return json_encode([
            'error'      => 'Ближайший вектор найден, но ресурс MODX с таким id отсутствует',
            'resourceId' => $resourceId,
        ], JSON_UNESCAPED_UNICODE);
    }

    $resourceData = $resource->toArray();

    return json_encode([
        'data' => $resourceData,
        'meta' => [
            'resourceId' => $resourceId,
            'distance'   => $distance,
        ],
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (Exception $e) {
    http_response_code(500);
    return json_encode(['error' => 'Ошибка запроса к MariaDB', 'details' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}

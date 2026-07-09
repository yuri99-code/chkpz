<?php
switch ($modx->event->name) {
    case 'OnDocFormSave':
        /** @var modResource $resource */
        $resource = $modx->event->params['resource'];
        $mode = $modx->event->params['mode']; // modSystemEvent::MODE_NEW или MODE_UPD

        if (!$resource) break;

        // Собираем данные, которые нужно отправить
        $data = $resource->get('pagetitle') . ' ' . $resource->get('content');

        // Отправка по API
        $ch = curl_init('http://host.docker.internal:11434/api/embed');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => json_encode(['model' => 'bge-m3', 'input' => $data]),
            CURLOPT_TIMEOUT => 30,
        ]);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $responseData = json_decode($response, true);
        $vector = $responseData['embeddings'][0] ?? null;

        if (!$vector) {
            $modx->log(modX::LOG_LEVEL_ERROR, 'Embedding not received: ' . print_r($responseData, true));
            return;
        }

        try {
            $dsn = 'pgsql:host=postgres;dbname=modx';
            $user = 'modx';
            $pass = 'secret';
            $pdo = new PDO($dsn, $user, $pass);

            // pgvector принимает вектор как строку вида '[0.1,0.2,0.3,...]'
            $vectorString = '[' . implode(',', $vector) . ']';

            $stmt = $pdo->prepare("
                INSERT INTO resource_embeddings (resource_id, embedding, created_at)
                VALUES (:resource_id, :embedding, NOW())
                ON CONFLICT (resource_id)
                DO UPDATE SET embedding = EXCLUDED.embedding, updated_at = now()
            ");

            $stmt->execute([
                ':resource_id' => $resource->get('id'),
                ':embedding' => $vectorString,
            ]);

        } catch (PDOException $e) {
            $modx->log(modX::LOG_LEVEL_ERROR, 'Postgres error: ' . $e->getMessage());
        }

        break;
}

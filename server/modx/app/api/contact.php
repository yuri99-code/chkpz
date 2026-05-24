<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: POST, OPTIONS');

header('Access-Control-Allow-Headers: Content-Type');

header('Content-Type: application/json');

//
// PREFLIGHT REQUEST
//

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {

    http_response_code(200);

    exit;
}

define('MODX_API_MODE', true);

require '../../index.php';

$modx->initialize('web');

//
// GET JSON
//

$data = json_decode(
    file_get_contents( 'php://input' ),
    true
);

$name = trim( $data['name'] ?? '' );

$email = trim( $data['email'] ?? '' );

$message = trim( $data['message'] ?? '' );

//
// VALIDATION
//

if ( ! $name || ! $email || ! $message ) {

    http_response_code( 422 );

    echo json_encode( [
        'error' => 'Заполните поля'
    ] );

    exit;
}

//
// MAIL
//

$modx->getService(
    'mail',
    'mail.modPHPMailer'
);

$modx->mail->set( modMail::MAIL_BODY,

    "
    Имя: {$name}<br>
    Email: {$email}<br><br>

    Сообщение:<br>

    {$message}
    "
);

$modx->mail->set(
    modMail::MAIL_FROM,
    'mark-shevtsov-1@yandex.ru'
);

$modx->mail->set(
    modMail::MAIL_FROM_NAME,
    'Website'
);

$modx->mail->set(
    modMail::MAIL_SUBJECT,
    'Новая заявка'
);

$modx->mail->address(
    'to',
    $modx->getOption( 'contact_email' )
);

$modx->mail->setHTML( true );

$modx->mail->mailer->SMTPDebug = 2;
$modx->mail->mailer->Debugoutput = function($str, $level) {
    error_log($str);
};

if ( ! $modx->mail->send() ) {

//    http_response_code( 500 );

    echo json_encode( [
        'error' => $modx->mail->mailer->ErrorInfo
    ] );

    return;
}

$modx->mail->reset();

echo json_encode( [
    'success' => true
] );

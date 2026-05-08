<?php

define( 'MODX_API_MODE', true );

require dirname( __DIR__ ) . '/index.php';

$modx->initialize( 'web' );

header( 'Content-Type: application/json' );

$resource = $modx->getObject( 'modResource', 2 );

if ( ! $resource ) {

    http_response_code( 404 );

    echo json_encode( [
        'error' => 'Page not found'
    ] );

    exit;
}

$data = $resource->toArray();

$data['vars'] = $resource->getTVValue('Test');

echo json_encode( $data );
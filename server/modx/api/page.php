<?php

define( 'MODX_API_MODE', true );

require dirname( __DIR__ ) . '/index.php';

$modx->initialize( 'web' );

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: *' );

$template = $_GET['template_id'] ?? null;

$parent = $_GET['parent_id'] ?? null;

$page_id = $_GET['page_id'] ?? null;

$criteria = [
    'published' => 1,
    'deleted'   => 0,
];

if ( $template ) {
    $criteria['template'] = $template;
}

if ( $parent ) {
    $criteria['parent'] = $parent;
}

if ( $page_id ) {
    $criteria['id'] = $page_id;
}

$query = $modx->newQuery( 'modResource' );

$query->where( $criteria );

$resources = $modx->getCollection(
    'modResource',
    $query
);

$result = [];

foreach ( $resources as $resource ) {

    $data = $resource->toArray();

    $data['tvs'] = [
        'category_image' => $resource->getTVValue( 'Category Image' ),
        'product_image' => $resource->getTVValue( 'Product Image' ),
    ];

    $result[] = $data;
}

echo json_encode( $result, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
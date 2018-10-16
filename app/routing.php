<?php

$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/items/add', ['GET', 'POST']],
        ['edit', '/items/edit/{id}', ['GET', 'POST']],
        ['delete', '/items/delete/{id}', ['GET', 'POST']],
    ],
    'Category' => [
        ['index', '/category', 'GET'],
        ['show', '/category/{id}', 'GET'],
    ],
];

?>
<?php

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contacts' => 'controllers/contacts.php',
    '/contacts/create' => 'controllers/contact_create.php',
];

function routeToController($path, $routes) {
    if (array_key_exists($path, $routes)) {
        require $routes[$path];
    } else {
        abort();
    }
}   

function abort($code = Response::NOT_FOUND) {
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}

routeToController($path, $routes);
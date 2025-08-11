<?php

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/users' => 'controllers/users.php',
    '/users/create' => 'controllers/create_user.php',
];

function routeToController($path, $routes) {
    if (array_key_exists($path, $routes)) {
        require $routes[$path];
    } else {
        abort(404);
    }
}   

function abort($code = 404) {
    http_response_code($code);
    exit;
}

routeToController($path, $routes);
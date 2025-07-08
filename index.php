<?php

require __DIR__ . '/core/functions.php';
require __DIR__ . '/core/Database.php';
require __DIR__ . '/controllers/TodoController.php';

$routes = require __DIR__ . '/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (!isset($routes[$uri])) {
    http_response_code(404);
    echo "404 Not Found";
    exit;
}

list($controllerName, $method) = $routes[$uri];

$controller = new $controllerName();
$controller->$method();
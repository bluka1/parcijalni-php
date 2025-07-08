<?php

require __DIR__ . '/core/functions.php';

require __DIR__ . '/core/Database.php';
require __DIR__ . '/core/Router.php';

use core\Router;
$router = new Router();
$routes = require __DIR__ . '/routes.php';

$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require __DIR__ . "/controllers/" . $routes[$currentUri];
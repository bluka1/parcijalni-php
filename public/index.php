<?php


require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

require '../routes.php';

$currentUri = $_SERVER['REQUEST_URI'];
$parts = parse_url($currentUri);

$method = $_SERVER['REQUEST_METHOD'];

$router->route($parts['path'], $method);
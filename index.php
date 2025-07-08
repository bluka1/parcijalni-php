<?php
require 'core/Database.php';

require 'core/functions.php';

require 'core/Router.php';

$router = new Router();

require 'routes.php';

$currentUri = $_SERVER['REQUEST_URI'];
$parts = parse_url($currentUri);

$method = $_SERVER['REQUEST_METHOD'];

$router->route($parts['path'], $method);
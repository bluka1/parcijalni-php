<?php 
require 'core/functions.php';

require __DIR__ . '/core/Database.php'; 

$routes = require __DIR__ . '/routes.php';

$currentUri = $_SERVER['REQUEST_URI'];

require __DIR__ . '/controllers/' . $routes[$currentUri];

// require __DIR__ . '/views/partials/head.php';
// require __DIR__ .  '/views/partials/foot.php';

require __DIR__ .  '/views/index.view.php';




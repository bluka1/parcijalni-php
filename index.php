<?php
require_once 'controllers/TodoController.php';

$controller = new TodoController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller->index();
        break;
    case '/store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store();
        }
        break;
    case '/done':
        $controller->markDone($_GET['id']);
        break;
    case '/delete':
        $controller->delete($_GET['id']);
        break;
    case '/todo':
        $controller->show($_GET['id']);
        break;
    default:
        http_response_code(404);
        echo "Stranica nije pronađena.";
        break;
}
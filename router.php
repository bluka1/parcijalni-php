<?php
require_once __DIR__ . "/controller/TodoController.php";

$controller = new TodoController();

$page = $_GET['page'] ?? 'index';

switch ($page) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'update-status':
        $controller->updateStatus();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}

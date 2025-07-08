<?php



$router->get('/', 'App\Controllers\HomeController', 'index');
$router->get('/zadaci', 'App\Controllers\ToDoController', 'index');
$router->get('/zadaci-create', 'App\Controllers\ToDoController', 'create');
$router->post('/zadaci-store', 'App\Controllers\ToDoController', 'store');
$router->delete('/zadaci-delete', 'App\Controllers\ToDoController', 'destroy');
$router->get('/zadaci-edit', 'App\Controllers\ToDoController', 'edit');
$router->post('/zadaci-update', 'App\Controllers\ToDoController', 'update');
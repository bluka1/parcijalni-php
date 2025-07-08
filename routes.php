<?php

$router->get('/', 'HomeController', 'index');
$router->get('/todo', 'ToDoController', 'index');
$router->get('/create-todo', 'ToDoController', 'create');
$router->post('/todo-create', 'ToDoController', 'store');
$router->get('/todo-update', 'ToDoController', 'edit');
$router->post('/todo-update', 'ToDoController', 'storeEdited');
$router->post('/todo-delete', 'ToDoController', 'destroy');
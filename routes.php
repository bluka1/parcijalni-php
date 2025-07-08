<?php

$router->get('/', 'HomeController', 'index');
$router->get('/tasks', 'TasksController', 'index');
$router->get('/tasks-create', 'TasksController', 'create');
$router->post('/tasks-create', 'TasksController', 'store');
$router->delete('/tasks-delete', 'TasksController', 'destroy');
$router->get('/tasks-edit', 'TasksController', 'edit');
$router->post('/tasks-store-edited', 'TasksController', 'storeEdited');
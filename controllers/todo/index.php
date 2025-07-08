<?php
require __DIR__ . '/../../models/Todo.php';

$todosModel = new Todo();

$todos = $todosModel->getAll();
$todosVal = array_values($todos);
view('todos/index.view.php',['todos' => $todosVal]);
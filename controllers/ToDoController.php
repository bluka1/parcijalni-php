<?php

class ToDoController {

  public function create() {
    view('todos/create.view.php');
  }

  public function destroy() {
    require __DIR__ . '/../models/Todo.php';
    $toDoModel = new Todo();

    $id = $_POST['id'];

    $toDoModel->deleteById($id);

    redirect('/todos');
  }

  public function edit() {
    require __DIR__ . '/../models/Todo.php';

    $id = $_GET['id'];

    $toDoModel = new Todo();

    $todo = $toDoModel->getById($id);

    view('todos/edit.view.php', [
      'todo' => $todo
    ]);
  }

  public function index() {
    require __DIR__ . '/../models/Todo.php';

    $toDoModel = new Todo();
    $todo = $toDoModel->getAll();

    view('todos/index.view.php', [
      'todos' => $todo
    ]);
  }

  public function store() {
    require __DIR__ . '/../models/Todo.php';
    $toDoModel = new Todo();

    $naslov = $_POST['naslov'];
    $tijelo = $_POST['opis'];

    $toDoModel->create(htmlspecialchars($naslov), htmlspecialchars($tijelo));

    redirect('/todos');
  }

  public function storeEdited () {
    require __DIR__ . '/../models/Todo.php';
    $articleModel = new Todo();

    $id = $_POST['id'];
    $naslov = $_POST['naslov'];
    $tijelo = $_POST['opis'];

    $articleModel->updateById($id, $naslov, $tijelo);

    redirect('/todos');
  }
}
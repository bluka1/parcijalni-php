<?php

class TasksController {

  public function create() {
    view('tasks/create.view.php');
  }

  public function destroy() {
    require __DIR__ . '/../models/Task.php';
    $taskModel = new Task();

    $id = $_POST['id'];

    $taskModel->deleteById($id);

    redirect('/tasks');
  }

  public function edit() {
    require __DIR__ . '/../models/Task.php';

    $id = $_GET['id'];

    $taskModel = new Task();

    $task = $taskModel->getById($id);

    view('tasks/edit.view.php', [
      'task' => $task
    ]);
  }

  public function index() {
    require __DIR__ . '/../models/Task.php';

    $taskModel = new Task();
    $tasks = $taskModel->getAll();

    view('tasks/index.view.php', [
      'tasks' => $tasks
    ]);
  }

  public function store() {
    require __DIR__ . '/../models/Task.php';
    $taskModel = new Task();

    $naslov = $_POST['naslov'];
    $opis = $_POST['opis'];

    $taskModel->create(htmlspecialchars($naslov), htmlspecialchars($opis));

    redirect('/tasks');
  }

  public function storeEdited () {
    require __DIR__ . '/../models/Task.php';
    $taskModel = new Task();

    $id = $_POST['id'];
    $naslov = $_POST['naslov'];
    $opis = $_POST['opis'];
    $status = $_POST['status'];

    $taskModel->updateById($id, $naslov, $opis, $status);

    redirect('/tasks');
  }
}
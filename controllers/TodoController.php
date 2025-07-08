<?php
require_once 'models/Todo.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new Todo();
    }

    public function index() {
        $todos = $this->model->getAll();
        include 'views/allTodos.view.php';
    }

    public function show($id) {
        $todo = $this->model->get($id);
        include 'views/todo.view.php';
    }

    public function store() {
        $naslov = $_POST['naslov'] ?? '';
        $opis = $_POST['opis'] ?? '';
        if ($naslov) {
            $this->model->create($naslov, $opis);
        }
        header('Location: /');
    }

    public function markDone($id) {
        $this->model->updateStatus($id, 'done');
        header('Location: /');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /');
    }
}
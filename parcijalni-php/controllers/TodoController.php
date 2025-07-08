<?php

require_once __DIR__ . '/../models/Todo.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new Todo();
    }

    public function index() {
        $tasks = $this->model->getAll();
        include __DIR__ . '/../views/index.view.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $this->model->create($title);
            header("Location: /todo/index");
        } else {
            include __DIR__ . '/../views/add.view.php';
        }
    }

    public function complete() {
        $id = $_GET['id'];
        $this->model->complete($id);
        header("Location: /todo/index");
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: /todo/index");
    }
}
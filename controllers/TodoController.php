<?php

require_once __DIR__ . '/../models/Todo.php';

class TodoController {
    private $todo;

    public function __construct() {
        $this->todo = new Todo();
    }

    public function index() {
        $todos = $this->todo->all();
        view('alltodos.view.php', ['todos' => $todos]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $naslov = $_POST['naslov'] ?? '';
            $opis = $_POST['opis'] ?? '';

            if (trim($naslov) !== '') {
                $this->todo->create($naslov, $opis);
            }

            redirect('/');
        }

        view('index.view.php');
    }

    public function complete() {
        if (isset($_GET['id'])) {
            $this->todo->complete($_GET['id']);
        }
        redirect('/');
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->todo->delete($_GET['id']);
        }
        redirect('/');
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            redirect('/');
        }

        $todo = $this->todo->get($_GET['id']);
        if (!$todo) {
            redirect('/');
        }

        view('edit.view.php', ['todo' => $todo]);
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $naslov = $_POST['naslov'] ?? '';
            $opis = $_POST['opis'] ?? '';

            if ($id && trim($naslov) !== '') {
                $this->todo->update($id, $naslov, $opis);
            }
        }

        redirect('/');
    }
}
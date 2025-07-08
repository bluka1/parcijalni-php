<?php
require_once "Controller.php";
require_once __DIR__ . "/../model/Todo.php";

class TodoController extends Controller {
    private $todoModel;

    public function __construct() {
        $this->todoModel = new Todo();
    }

    public function index() {
        $todos = $this->todoModel->getAll();
        $this->view("allTodos", ["todos" => $todos]);
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->todoModel->naslov = $_POST["naslov"] ?? "";
            $this->todoModel->opis = $_POST["opis"] ?? "";
            $this->todoModel->status = "undone";
            $this->todoModel->create();
        }
        header("Location: /parcijalni-php/index.php?page=index");
        exit;
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            header("Location: /parcijalni-php/index.php?page=index");
            exit;
        }
        $id = intval($_GET['id']);
        $todos = $this->todoModel->getAll();
        $todoToEdit = null;
        foreach ($todos as $t) {
            if ($t['id'] === $id) {
                $todoToEdit = $t;
                break;
            }
        }
        if (!$todoToEdit) {
            echo "Task not found.";
            exit;
        }
        $this->view('editTodo', ['todo' => $todoToEdit]);
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->todoModel->id = intval($_POST['id']);
            $this->todoModel->naslov = $_POST['naslov'] ?? '';
            $this->todoModel->opis = $_POST['opis'] ?? '';
            $this->todoModel->update();
        }
        header("Location: /parcijalni-php/index.php?page=index");
        exit;
    }

    public function updateStatus() {
        if (isset($_GET["id"]) && isset($_GET["status"])) {
            $this->todoModel->id = intval($_GET["id"]);
            $this->todoModel->status = $_GET["status"] === "done" ? "done" : "undone";
            $this->todoModel->updateStatus();
        }
        header("Location: /parcijalni-php/index.php?page=index");
        exit;
    }

    public function delete() {
        if (isset($_GET["id"])) {
            $this->todoModel->id = intval($_GET["id"]);
            $this->todoModel->delete();
        }
        header("Location: /parcijalni-php/index.php?page=index");
        exit;
    }
}

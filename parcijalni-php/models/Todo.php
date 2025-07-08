<?php

require_once __DIR__ . '/../core/Database.php';

class Todo {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title, status) VALUES (?, 0)");
        $stmt->execute([$title]);
    }

    public function complete($id) {
        $stmt = $this->db->prepare("UPDATE tasks SET status = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
    }
}
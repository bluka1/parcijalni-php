<?php
require_once 'core/Database.php';

class Todo {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM todos ORDER BY createdAt DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM todos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($naslov, $opis) {
        $stmt = $this->pdo->prepare("INSERT INTO todos (naslov, opis) VALUES (?, ?)");
        return $stmt->execute([$naslov, $opis]);
    }

    public function updateStatus($id, $status) {
        $stmt = $this->pdo->prepare("UPDATE todos SET status = ? WHERE id = ?");
        return $stmt->execute([$status, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM todos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
<?php

class Todo {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM todos ORDER BY createdAt DESC");
        return $stmt->fetchAll();
    }

    public function create($naslov, $opis = null) {
        $stmt = $this->pdo->prepare("INSERT INTO todos (naslov, opis) VALUES (?, ?)");
        $stmt->execute([$naslov, $opis]);
    }

    public function complete($id) {
        $stmt = $this->pdo->prepare("UPDATE todos SET status = 'done' WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM todos WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function get($id) {
    $stmt = $this->pdo->prepare("SELECT * FROM todos WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

public function update($id, $naslov, $opis) {
    $stmt = $this->pdo->prepare("UPDATE todos SET naslov = ?, opis = ? WHERE id = ?");
    $stmt->execute([$naslov, $opis, $id]);
}
}
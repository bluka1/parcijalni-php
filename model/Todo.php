<?php
require_once __DIR__ . "/Database.php";

class Todo {
    private $conn;
    private $table = "todos";

    public $id;
    public $naslov;
    public $opis;
    public $status;
    public $createdAt;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} ORDER BY createdAt DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create() {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (naslov, opis, status) VALUES (:naslov, :opis, :status)");
        $stmt->bindParam(":naslov", $this->naslov);
        $stmt->bindParam(":opis", $this->opis);
        $stmt->bindParam(":status", $this->status);
        return $stmt->execute();
    }

    public function updateStatus() {
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET status = :status WHERE id = :id");
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }

    public function update() {
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET naslov = :naslov, opis = :opis WHERE id = :id");
        $stmt->bindParam(":naslov", $this->naslov);
        $stmt->bindParam(":opis", $this->opis);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }

    public function delete() {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}

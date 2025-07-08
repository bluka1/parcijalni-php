<?php

class Task {
  private $db;

  public function __construct() {
    $this->db = Database::getInstance()->getConnection();
  }

  public function getAll() {
    $stmt = $this->db->prepare("SELECT * FROM todos");
    $stmt->execute();

    return $stmt->fetchAll();
  }

  public function getById($id) {
    $stmt = $this->db->prepare("SELECT * FROM todos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
  }

  public function create(string $naslov, string $opis, string $status = 'undone') {
    $stmt = $this->db->prepare("INSERT INTO todos (naslov, opis, status) VALUES (:naslov, :opis, :status)");

    $stmt->bindParam(':naslov', $naslov);
    $stmt->bindParam(':opis', $opis);
    $stmt->bindParam(':status', $status);

    $stmt->execute();
  }

  public function deleteById(string $id) {
    $stmt = $this->db->prepare("DELETE FROM todos WHERE id = :id");

    $stmt->bindParam(':id', $id);

    $stmt->execute();
  }

  public function updateById(string $id, string $naslov, string $opis, string $status) {
    $stmt = $this->db->prepare("UPDATE todos SET naslov = :naslov, opis = :opis, status = :status WHERE id = :id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':naslov', $naslov);
    $stmt->bindParam(':opis', $opis);
    $stmt->bindParam(':status', $status);

    $stmt->execute();
  }
}
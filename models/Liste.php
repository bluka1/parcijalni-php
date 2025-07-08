<?php

require_once __DIR__ . '/../core/Database.php';

class Liste {
  public $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function getAll() {
    $stmt = $this->db->connection->prepare("SELECT * FROM todos");
    $stmt->execute();

    return $stmt->fetchAll();
  }
}
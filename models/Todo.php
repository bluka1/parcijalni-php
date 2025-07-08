<?php 
class Todo {
  public $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAll() {
    $stmt = $this->db->connection->prepare("SELECT * FROM todos");
    $stmt->execute();

    return $stmt->fetchAll();
  }

  public function updateById(string $id, string $naslov, string $tijelo) {
    $stmt = $this->db->connection->prepare("UPDATE clanci SET naslov = :naslov, tijelo = :tijelo WHERE id = :id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':naslov', $naslov);
    $stmt->bindParam(':tijelo', $tijelo);

    $stmt->execute();
  }

//   public function getById($id) {
//     $stmt = $this->db->prepare("SELECT * FROM clanci WHERE id = :id");
//     $stmt->bindParam(':id', $id);
//     $stmt->execute();

//     return $stmt->fetch();
//   }

//   public function create(string $naslov, string $tijelo) {
//     $stmt = $this->db->prepare("INSERT INTO clanci (korisnikId, naslov, tijelo) VALUES (1, :naslov, :tijelo)");

//     $stmt->bindParam(':naslov', $naslov);
//     $stmt->bindParam(':tijelo', $tijelo);

//     $stmt->execute();
//   }

//   public function deleteById(string $id) {
//     $stmt = $this->db->prepare("DELETE FROM clanci WHERE id = :id");

//     $stmt->bindParam(':id', $id);

//     $stmt->execute();
//   }

//   public function updateById(string $id, string $naslov, string $tijelo) {
//     $stmt = $this->db->prepare("UPDATE clanci SET naslov = :naslov, tijelo = :tijelo WHERE id = :id");

//     $stmt->bindParam(':id', $id);
//     $stmt->bindParam(':naslov', $naslov);
//     $stmt->bindParam(':tijelo', $tijelo);

//     $stmt->execute();
//   }
}
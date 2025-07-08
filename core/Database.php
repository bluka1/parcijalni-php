<?php

class Database {
  public $connection;

  public function __construct() {
    try {
      $this->connection = new PDO("mysql:host=localhost;dbname=tododb", "root", "");
      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
      die("Neuspješna konekcija: {$e->getMessage()}");
    }
  }

  public function getConnection() {
    return $this->connection;
  }
}
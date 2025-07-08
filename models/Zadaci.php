<?php

class Zadaci
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $stmt = $this->db->connection->prepare("SELECT * FROM todos");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
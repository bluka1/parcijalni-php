<?php

class Zadaci {
    public $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $stmt = $this->db->connection->prepare("SELECT * FROM todos");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->connection->prepare("SELECT * FROM todos WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }
    public function updateById($id) {
        $stmt = $this->db->connection->prepare("UPDATE todos SET status = ? WHERE id = ?");
        
        $zadatak = $this->getById($id);
        if($zadatak['status'] == 'done') {
            $statusToUpdate = 'undone';
        } else {
            $statusToUpdate = 'done';
        }
        $stmt->execute([$statusToUpdate, $id]);

        return $stmt->fetch();
    }

    public function create($naslov, $opis, $status){
        $stmt = $this->db->connection->prepare("INSERT INTO todos (naslov, opis, status) VALUES (?, ?, ?)");

        $stmt->execute([$naslov, $opis, $status]);
    }

    public function delete($id) {
        $stmt = $this->db->connection->prepare("DELETE FROM todos WHERE id = ?");
        $stmt->execute([$id]);
    }
}
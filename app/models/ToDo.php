<?php


namespace App\Models;

use App\Core\BaseModel;
use App\Core\Database;
use function App\Core\dd;

use PDO; // rad sa bazom podataka
use PDOException; // hvatanje grešaka

class ToDo extends BaseModel
{
  


    public function __construct()
    {
        // Pozivamo konstruktor roditeljske klase BaseModel; nije nužno, 
        // ali dobra praksa. PHP će automatski pozvati roditeljski konstruktor ako ga ne navedemo.
        // Ovako osiguravamo da se konekcija na bazu podataka inicijalizira
       
        parent::__construct(); 

    }
    public function getAll()
    {


        try {
            $stmt = $this->db->prepare("SELECT * FROM todos");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM todos WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            dd('Greška pri dohvaćanju zadatka: ' . $e->getMessage());
            return false;
        }
    }
    public function create($naslov, $opis, $status ='')
      {
        try {
            
            $stmt = $this->db->prepare("INSERT INTO todos (naslov, opis, status) VALUES (:title, :description, :status)");
            $stmt->bindParam(':title', $naslov);
            $stmt->bindParam(':description', $opis);
            $stmt->bindParam(':status', $status);
        
            return $stmt->execute();
        } catch (PDOException $e) {
   
            dd('Greška pri dodavanju zadatka: ' . $e->getMessage());
            return false;
        }
    }
    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM todos WHERE id = :id");
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
          dd($e);
        }
    }
    public function update($id, $naslov, $opis, $status)
    {
        try {
            $stmt = $this->db->prepare("UPDATE todos SET naslov = :title, opis = :description, status = :status WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $naslov);
            $stmt->bindParam(':description', $opis);
            $stmt->bindParam(':status', $status);
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

}
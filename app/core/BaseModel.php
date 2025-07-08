<?php
namespace App\Core;
use App\Core\Database;
use PDO;
// BaseModel je apstraktna klasa koja se koristi kao osnovna klasa za sve modele u aplikaciji

class BaseModel
{

    protected PDO $db; // Ovdje čuvam konekciju na bazu podataka

    // Konstruktor inicijalizira konekciju na bazu podataka
    // Ova klasa koristi Singleton pattern za dobivanje instance baze podataka
    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
}
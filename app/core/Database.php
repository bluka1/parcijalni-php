<?php

// Database.php singletone klasa za konekciju na bazu podataka


namespace App\Core;

use PDO; // rad sa bazom podataka
use PDOException; // hvatanje grešaka

class Database
{

    private static ?Database $instance = null; // statička varijabla koja čuva instancu ove klase
    private PDO $connection; // ovjde čuvamo konekciju na bazu podataka

    // Singleton pattern - privatni konstruktor

    private function __construct()
    {



        // varijable iz .env datoteke
        $host = '192.168.1.219';
        $dbname = 'tododb';
        $user = 'igor';
        $pass = 'Relax-Balance-Jiffy2';

        $konekcija = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->connection = new PDO( $konekcija,  $user, $pass, $options);

        } catch (PDOException $e) {
            // ako dođe do greške, ispišem je
            echo "Greška u konekciji: " . $e->getMessage();
        }

    }
    // metoda za dobivanje instance ove klase
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    // metoda za dobivanje konekcije na bazu podataka
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
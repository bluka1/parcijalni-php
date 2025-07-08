<?php

namespace App\Controllers;

use App\Core\Database;
use function App\Core\view;

use PDO; // rad sa bazom podataka
use PDOException;

 class HomeController
{
  private Database $db;

    public function __construct($dbinstance = null)
    {
        $this->db = $dbinstance ?? Database::getInstance(); // proslijediti modelu?
    }


    public function index()
    {
        

     view('home/index', ['naslov' => 'To-Do List']);
    }
}   
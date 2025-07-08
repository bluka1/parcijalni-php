<?php
namespace App\Core;

abstract class BaseController
{
    protected $db;

    public function __construct($dbinstance = null)
    {
        $this->db = $dbinstance ?? Database::getInstance(); // proslijediti modelu?
    }

    // tu sad dalje nisam siguran
}
<?php
namespace App\Core;
use App\Core\Database;
use PDO;


class BaseModel
{

    protected PDO $db; // Ovdje čuvam konekciju na bazu podataka


    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
}
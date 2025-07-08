<?php

class Database {
    private static $instance = null;

    public static function getConnection() {
        if (!self::$instance) {
            try {
                $dsn = 'mysql:host=localhost;dbname=tododb;charset=utf8mb4'; 
                $username = 'root';
                $password = 'Kesenem89#';

                self::$instance = new PDO($dsn, $username, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
<?php

class Database {
    private static $pdo = null;

    public static function connect() {
        if (!self::$pdo) {
            self::$pdo = new PDO("mysql:host=localhost;dbname=tododb;charset=utf8", "root", "8392Dule");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return self::$pdo;
    }
}
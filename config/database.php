<?php

class Database {
    public static function connect() {
        try {
            return new PDO("mysql:host=localhost;dbname=umkm_desa", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    }
}
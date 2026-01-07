<?php
require_once "config/database.php";

class KategoriModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        return $this->db->query("SELECT kategori, COUNT(*) as total FROM umkm GROUP BY kategori")
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}

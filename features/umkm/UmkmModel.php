<?php
require_once "config/database.php";

class UmkmModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM umkm ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLimit($limit) {
        $stmt = $this->db->prepare("SELECT * FROM umkm ORDER BY id DESC LIMIT ?");
        $stmt->bindValue(1, $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM umkm WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
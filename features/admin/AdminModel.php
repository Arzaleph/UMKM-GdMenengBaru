<?php
require_once "config/database.php";

class AdminModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function findAdmin($username) {
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUmkm() {
        return $this->db->query("SELECT * FROM umkm ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUmkmById($id) {
        $stmt = $this->db->prepare("SELECT * FROM umkm WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function storeUmkm($data) {
        $stmt = $this->db->prepare("INSERT INTO umkm(nama, kategori, deskripsi, alamat, kontak, foto)
                                    VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data["nama"],
            $data["kategori"],
            $data["deskripsi"],
            $data["alamat"],
            $data["kontak"],
            $data["foto"]
        ]);
    }

    public function updateUmkm($id, $data) {
        $stmt = $this->db->prepare("UPDATE umkm SET nama=?, kategori=?, deskripsi=?, alamat=?, kontak=?, foto=?
                                    WHERE id=?");
        return $stmt->execute([
            $data["nama"],
            $data["kategori"],
            $data["deskripsi"],
            $data["alamat"],
            $data["kontak"],
            $data["foto"],
            $id
        ]);
    }

    public function deleteUmkm($id) {
        $stmt = $this->db->prepare("DELETE FROM umkm WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

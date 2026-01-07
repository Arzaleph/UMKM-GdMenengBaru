<?php
require_once "core/Controller.php";
require_once "features/umkm/UmkmModel.php";

class UmkmController extends Controller {
    public function index() {
        $model = new UmkmModel();
        $umkm = $model->getAll();

        $this->view("features/umkm/views/index.php", ["umkm" => $umkm]);
    }

    public function detail() {
        $id = $_GET["id"] ?? null;
        if (!$id) {
            echo "UMKM tidak ditemukan";
            return;
        }

        $model = new UmkmModel();
        $detail = $model->getById($id);

        // Perbaikan: Ubah key 'detail' menjadi 'umkm' agar sesuai dengan file views/detail.php
        $this->view("features/umkm/views/detail.php", ["umkm" => $detail]);
    }
}
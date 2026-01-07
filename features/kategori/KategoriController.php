<?php
require_once "core/Controller.php";
require_once "features/kategori/KategoriModel.php";

class KategoriController extends Controller {
    public function index() {
        $model = new KategoriModel();
        $kategori = $model->getAll();

        $this->view("features/kategori/views/index.php", ["kategori" => $kategori]);
    }
}

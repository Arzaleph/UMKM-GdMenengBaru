<?php
require_once "core/Controller.php";
require_once "features/umkm/UmkmModel.php";

class HomeController extends Controller {
    public function index() {
        $umkmModel = new UmkmModel();
        $umkm = $umkmModel->getLimit(6);

        $this->view("features/home/views/home.php", ["umkm" => $umkm]);
    }
}

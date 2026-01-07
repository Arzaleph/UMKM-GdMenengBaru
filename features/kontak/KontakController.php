<?php
require_once "core/Controller.php";

class KontakController extends Controller {
    public function index() {
        $this->view("features/kontak/views/index.php");
    }
}

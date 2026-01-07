<?php

function redirect($path) {
    header("Location: " . BASE_URL . $path);
    exit;
}

function isAdmin() {
    return isset($_SESSION["admin"]);
}

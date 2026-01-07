<?php
// Jangan ada session_start di sini karena sudah ada di index.php
define("BASE_URL", "http://localhost/umkm-gedong-meneng-baru");
date_default_timezone_set("Asia/Jakarta");

// Database Config
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "umkm_desa");
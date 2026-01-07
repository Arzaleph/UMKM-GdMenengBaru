<?php
session_start();
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'core/Router.php';
require_once 'core/Controller.php';

$router = new Router();

// Rute Publik
$router->add('GET', '/', 'HomeController', 'index');
$router->add('GET', '/umkm', 'UmkmController', 'index');
$router->add('GET', '/umkm/detail', 'UmkmController', 'detail');
$router->add('GET', '/kategori', 'KategoriController', 'index');
$router->add('GET', '/kontak', 'KontakController', 'index');

// Rute Admin
$router->add('GET', '/admin/login', 'AdminController', 'login');
// PERBAIKAN: Arahkan POST ke method 'auth', bukan 'login'
$router->add('POST', '/admin/login', 'AdminController', 'auth'); 
$router->add('GET', '/admin/dashboard', 'AdminController', 'dashboard');
$router->add('GET', '/admin/logout', 'AdminController', 'logout');

// Rute Manajemen UMKM
$router->add('GET', '/admin/umkm/create', 'AdminController', 'create');
$router->add('POST', '/admin/umkm/store', 'AdminController', 'store');
$router->add('GET', '/admin/umkm/edit', 'AdminController', 'edit');
$router->add('POST', '/admin/umkm/update', 'AdminController', 'update');
$router->add('GET', '/admin/umkm/delete', 'AdminController', 'delete');

$router->run();
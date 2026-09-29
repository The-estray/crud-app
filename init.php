<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once __DIR__ .  '/src/Database.php';
require_once __DIR__ .  '/src/ProductRepository.php';
require_once __DIR__ .  '/src/ProductController.php';
require_once __DIR__ .  '/src/Router.php';

$env = parse_ini_file('.env');
$database = new Database($env['DB_HOST'], $env['DB_NAME'], $env['DB_USER'], $env['DB_PASS']);
$pdo = $database->getConnection();
$productRepo = new ProductRepository($pdo);
$productController = new ProductController($productRepo);

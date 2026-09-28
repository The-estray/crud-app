<?php
require_once __DIR__ .  '/src/Database.php';


$env = parse_ini_file('.env');
$database = new Database($env['DB_HOST'], $env['DB_NAME'], $env['DB_USER'], $env['DB_PASS']);
$pdo = $database->getConnection();
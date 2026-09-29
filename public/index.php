<?php
require_once __DIR__ . '/../init.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

Router::get('/public/', [$productController, 'view']);
Router::get('/public/products', [$productController, 'index']);

Router::dispatch($uri, $method);

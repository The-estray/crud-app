<?php
require_once __DIR__ . '/../init.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

Router::get('/public/', [$productController, 'view']);
Router::get('/public/create', [$productController, 'createView']);

Router::get('/public/products', [$productController, 'index']);
Router::post('/public/products', [$productController, 'store']);
Router::post('/public/products/delete', [$productController, 'destroy']);

Router::dispatch($uri, $method);

<?php

class ProductController
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function index(ProductRepository $productRepo): void
    {
        header('Content-Type: application/json');
        $products = $productRepo->getAll();
        echo json_encode($products);
        exit;
    }
}
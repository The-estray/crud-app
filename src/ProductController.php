<?php

class ProductController
{
    private ProductRepository $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function view(): void
    {
        require_once __DIR__ . '/../public/view/products.php';
        exit;
    }

    public function index(): void
    {
        header('Content-Type: application/json');
        $products = $this->productRepo->getAll();
        echo json_encode($products);
        exit;
    }
}
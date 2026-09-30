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

    public function createView(): void
    {
        require_once __DIR__ . '/../public/view/create.php';
        exit;
    }

    public function index(): void
    {
        header('Content-Type: application/json');
        $products = $this->productRepo->getAll();
        echo json_encode($products);
        exit;
    }

    public function store(): void
    {
        $raw = file_get_contents('php://input');
        $data = json_decode($raw, true);

        if (empty($data['title']) || empty($data['price'])) {
            http_response_code(422);
            echo json_encode(['error' => 'Заполните данные']);
            exit;
        }

        $title = trim($data['title']);
        $price = trim($data['price']);
        $description = trim($data['description'] ?? '');

        $this->productRepo->create($title, $price, $description);
        http_response_code(201);
        echo json_encode(['status' => 'success']);
        exit;
    }
}
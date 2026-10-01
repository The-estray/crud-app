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
        $price = (float)$data['price'];
        $description = trim($data['description'] ?? '');

        $this->productRepo->create($title, $price, $description);
        http_response_code(201);
        echo json_encode(['status' => 'success']);
        exit;
    }

    public function destroy(): void
    {
        $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);

        if (!$id || $id <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid ID']);
            exit;
        }

        $this->productRepo->delete($id);
        http_response_code(200);
        echo json_encode(['status' => 'success']);
        exit;
    }

    public function update(): void
    {
        $raw = file_get_contents('php://input');
        $data = json_decode($raw, true);

        $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);

        if (!$id || $id <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid ID']);
            exit;
        }

        if (empty($data['title']) || empty($data['price'])) {
            http_response_code(422);
            echo json_encode(['error' => 'Заполните данные']);
            exit;
        }
        $title = trim($data['title']);
        $price = (float)$data['price'];
        $description = trim($data['description'] ?? '');

        $this->productRepo->update($title, $price, $description, $id);
        http_response_code(200);
        echo json_encode(['status' => 'success']);
        exit;
    }

    public function show(): void
    {
        header('Content-Type: application/json');

        $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);

        if (!$id || $id <= 0) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid ID']);
            exit;
        }

        $product = $this->productRepo->getById($id);

        if (!$product) {
            http_response_code(404);
            echo json_encode(['error' => 'Product not found']);
            exit;
        }

        http_response_code(200);
        echo json_encode($product);
        exit;
    }

    public function showView(): void
    {
        require_once __DIR__ . '/../public/view/show.php';
        exit;
    }
}

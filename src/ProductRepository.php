<?php

class ProductRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(string $title, string $price, string $description): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO products (title, price, description) VALUES (?,?,?)");
        $stmt->execute([$title, $price, $description]);
    }

    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM products ORDER BY id DESC");
        return $stmt->fetchAll();
    }
}
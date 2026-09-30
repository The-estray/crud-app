<?php

class ProductRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(string $title, float $price, string $description): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO products (title, price, description) VALUES (?,?,?)");
        $stmt->execute([$title, $price, $description]);
    }

    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM products WHERE deleted_at IS NULL ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function delete(int $id): bool
    {
        $stmt = $this->pdo->prepare("UPDATE products SET deleted_at = NOW() WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function update(string $title, float $price, string $description, int $id): void
    {
        $stmt = $this->pdo->prepare("UPDATE products SET title = ?, price = ?, description = ? WHERE id = ?");
        $stmt->execute([$title, $price, $description, $id]);
    }
}
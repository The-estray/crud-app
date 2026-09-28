<?php

class PostRepository
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
}
<?php

$beer1 = new Beer("IPA", 5.0, 10, "Ale");
$beer2 = new Beer("Stout", 6.0, 5, "Dark");
$beer2->calculateTotal(); // Example usage of calculateTotal method

abstract class Product{
    protected string $name;
    protected float $price;
    protected int $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    abstract public function calculateTotal(): float;
}

class Beer extends Product
{
    private string $type;
    const tax = 0.16; // 16% tax

    public function __construct(string $name, float $price, int $quantity, string $type)
    {
        parent::__construct($name, $price, $quantity);
        $this->type = $type;
    }

    public function calculateTotal(): float
    {
        return $this->price * $this->quantity * (1 + self::tax);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
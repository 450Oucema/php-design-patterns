<?php

namespace App\Domain\Entity;

class OrderItem
{
    private Product $product;
    private float $amount;
    private int $count;

    public function __construct(Product $product, float $amount, int $count)
    {
        $this->product = $product;
        $this->amount = $amount;
        $this->count = $count;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}

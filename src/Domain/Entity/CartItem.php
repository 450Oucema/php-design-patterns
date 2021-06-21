<?php

namespace App\Domain\Entity;

class CartItem
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

    public function addProduct(): void
    {
        $this->count++;
        $this->amount += $this->product->getPrice();
    }

    public function removeProduct(): void
    {
        $this->count--;
        $this->amount -= $this->product->getPrice();
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

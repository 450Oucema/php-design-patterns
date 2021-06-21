<?php

namespace App\Domain\Entity;

use App\Core\Observer\Product\ProductSubjectInterface;
use App\Core\Observer\Product\ProductSubscriberInterface;

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private int $stock = 0;
    private ?string $description = null;
    private ?string $imageUrl = null;

    public function __construct(int $id, string $name, float $price, int $stock = 0, ?string $description = null, ?string $imageUrl = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
        $this->stock = $stock;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public static function fromAttributes(array $attributes): self
    {
        return new self(
            $attributes['id'],
            $attributes['name'],
            $attributes['price'],
            $attributes['stock'],
            $attributes['description'],
            $attributes['imageUrl']
        );
    }
}

<?php

namespace App\Core\Observer\Product;

class ProductSubscriber implements ProductSubscriberInterface
{
    private string $productId;
    private string $email;

    public function __construct(string $email, string $productId)
    {
        $this->email = $email;
        $this->productId = $productId;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

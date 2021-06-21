<?php

namespace App\Core\Observer\Product;

interface ProductSubscriberInterface
{
    public function getProductId(): string;

    public function getEmail(): string;
}

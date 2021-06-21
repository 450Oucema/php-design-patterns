<?php

namespace App\Domain\Context;

class InStockProduct implements ProductStockStateInterface
{
    public function calculateStock(ProductContext $context): bool
    {
        return $context->getProduct()->getStock() > 0;
    }

    public function stockIsEnough(ProductContext $context, int $productsWished): bool
    {
        return $context->getProduct()->getStock() >= $productsWished;
    }
}

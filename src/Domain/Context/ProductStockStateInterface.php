<?php

namespace App\Domain\Context;

interface ProductStockStateInterface {
    public function calculateStock(ProductContext $context): bool;
    public function stockIsEnough(ProductContext $context, int $number): bool;
}

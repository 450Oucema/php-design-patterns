<?php

namespace App\Domain\Context;

use App\Domain\Entity\Product;

class ProductContext
{
    private Product $product;
    private ProductStockStateInterface $productState;

    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->setStockState(new InStockProduct());
    }

    public function isRemaining()
    {
        return $this->productState->calculateStock($this);
    }

    public function remainsEnough(int $number)
    {
        return $this->productState->stockIsEnough($this, $number);
    }

    public function getStock(): int
    {
        return $this->product->getStock();
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setStockState($stockState) {
        $this->productState = $stockState;
    }
}

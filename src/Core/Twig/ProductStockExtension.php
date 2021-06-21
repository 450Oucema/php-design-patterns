<?php

namespace App\Core\Twig;

use App\Domain\Context\ProductContext;
use App\Domain\Entity\Product;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ProductStockExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('productRemains', [$this, 'productRemains']),
            new TwigFunction('productRemainsEnough', [$this, 'productRemainsEnough']),
        ];
    }

    public function productRemains($product): bool
    {
        if (is_array($product)) {
            $product = Product::fromAttributes($product);
        }

        $context = new ProductContext($product);

        return $context->isRemaining();
    }

    public function productRemainsEnough($product, $number): bool
    {
        if (is_array($product)) {
            $product = Product::fromAttributes($product);
        }

        $context = new ProductContext($product);

        return $context->remainsEnough($number);
    }
}

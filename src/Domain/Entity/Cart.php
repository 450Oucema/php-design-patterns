<?php

namespace App\Domain\Entity;

class Cart
{
    private array $cartItems = [];
    private ?string $reductionCode = null;

    public function __construct(array $cartItems = [], ?string $reductionCode = null)
    {
        $this->cartItems = $cartItems;
        $this->reductionCode = $reductionCode;
    }

    public function getCartItems(): array
    {
        return $this->cartItems;
    }

    public function addCartItem(Product $product): void
    {
        $inCart = array_filter($this->cartItems, function ($item) use ($product) {
            /** @var CartItem $item */
            return $item->getProduct()->getId() === $product->getId();
        });


        if (count($inCart) > 0) {
            array_filter($this->cartItems, function ($item) use ($product) {
                /** @var CartItem $item */
                if ($item->getProduct()->getId() === $product->getId()) {
                    $item->addProduct();
                }
            });
        } else {
            $this->cartItems[] = new CartItem($product, $product->getPrice(), 1);
        }
    }

    public function setCartItems(array $products): void
    {
        $this->cartItems = $products;
    }

    public function getReductionCode(): ?string
    {
        return $this->reductionCode;
    }

    public function setReductionCode(?string $reductionCode): void
    {
        $this->reductionCode = $reductionCode;
    }

    public function count(): int
    {
        return count($this->cartItems);
    }

    public function price(): float
    {
        $sum = 0;

        /** @var CartItem $item */
        foreach ($this->cartItems as $item) {
            $sum += $item->getAmount();
        }

        return $sum;
    }

    public static function save(self $cart): void
    {
        if (isset($_SESSION)) {
            $_SESSION['cart'] = $cart;
        }
    }
}

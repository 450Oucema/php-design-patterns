<?php

namespace App\Core\Factory;

use App\Domain\Entity\Cart;

class CartFactory
{
    public static function make()
    {
        return new Cart();
    }

    public static function fromSession()
    {
        if (isset($_SESSION) && isset($_SESSION['cart'])) {
            return $_SESSION['cart'];
        }

        $cart = self::make();
        $_SESSION['cart'] = $cart;

        return $cart;
    }

    public static function clear()
    {
        $cart = self::make();
        $_SESSION['cart'] = $cart;

        return $cart;
    }
}

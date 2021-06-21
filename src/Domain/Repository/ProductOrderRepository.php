<?php

namespace App\Domain\Repository;

use PhpOrm\DB;

class ProductOrderRepository extends DB
{
    protected $table = 'order_product';

    protected $attributes = ['id', 'product_id', 'order_id', 'nb'];

    public static function factory()
    {
        return new self();
    }
}

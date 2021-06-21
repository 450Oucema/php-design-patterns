<?php

namespace App\Domain\Repository;

use PhpOrm\DB;

class ProductRepository extends DB
{
    protected $table = 'product';

    protected $attributes = ['id', 'name', 'price', 'stock', 'description', 'imageUrl'];

    public static function factory()
    {
        return new self();
    }
}

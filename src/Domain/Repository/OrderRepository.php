<?php

namespace App\Domain\Repository;

use PhpOrm\DB;

class OrderRepository extends DB
{
    protected $table = '_order';

    protected $attributes = ['id', 'username'];

    public static function factory()
    {
        return new self();
    }
}

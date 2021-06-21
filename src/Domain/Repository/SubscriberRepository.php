<?php

namespace App\Domain\Repository;

use PhpOrm\DB;

class SubscriberRepository extends DB
{
    protected $table = 'subscriber';

    protected $attributes = ['id', 'product_id', 'email'];

    public static function factory()
    {
        return new self();
    }
}

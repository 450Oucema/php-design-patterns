<?php

namespace App\Core\Command;

class OrderQueue
{
    private array $orders = [];

    public function addOrder(Orderer $order): void
    {
        $this->orders[] = $order;
    }

    public function start(): void
    {
        foreach ($this->orders as $order) {
            $order->execute();
        }
    }
}

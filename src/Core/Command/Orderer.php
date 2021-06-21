<?php

namespace App\Core\Command;

use App\Domain\Entity\Order;
use App\Domain\Entity\OrderItem;
use App\Domain\Repository\OrderRepository;
use App\Domain\Repository\ProductOrderRepository;
use App\Domain\Repository\ProductRepository;

class Orderer implements OrderInterface
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    public function execute(): void
    {
        OrderRepository::factory()
            ->insert([
                'id' => $this->order->getId(),
                'username' => $this->order->getUsername()
            ])
        ;

        /** @var OrderItem $orderItem */
        foreach ($this->order->getOrderItems() as $orderItem) {
            $product = $orderItem->getProduct();
            $count = strval($product->getStock() - intval($orderItem->getCount()));

            ProductOrderRepository::factory()
                ->insert([
                    'order_id' => $this->order->getId(),
                    'product_id' => $product->getId(),
                    'nb' => $orderItem->getCount()
                ])
            ;


            ProductRepository::factory()
                ->where('id', $product->getId())
                ->update(['stock' => $count])
            ;
        }
    }
}

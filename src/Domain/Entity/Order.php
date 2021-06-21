<?php

namespace App\Domain\Entity;

use Ramsey\Uuid\Uuid;

class Order
{
    private string $id;
    private array $orderItems = [];
    private string $username;

    public function __construct(string $username)
    {
        $this->id = (Uuid::uuid4())->toString();
        $this->username = $username;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function addOrderItems(OrderItem $orderItem): void
    {
        $this->orderItems[] = $orderItem;
    }

    public function setOrderItems(array $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}

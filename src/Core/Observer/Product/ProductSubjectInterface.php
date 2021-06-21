<?php

namespace App\Core\Observer\Product;

interface ProductSubjectInterface
{
    public static function addSubscriber(ProductSubscriberInterface $subscriber): void;
    public static function notifySubscribers(string $id, string $productName): void;
}

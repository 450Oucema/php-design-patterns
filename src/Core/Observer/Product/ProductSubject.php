<?php

namespace App\Core\Observer\Product;

use App\App;
use App\Domain\Repository\SubscriberRepository;
use Swift_Message;

class ProductSubject implements ProductSubjectInterface
{
    private string $id;
    private const MAIL_NOTIFICATION_MESSAGE = 'The product %s is now available';
    public function __construct($id)
    {
        $this->id = $id;
    }

    public static function addSubscriber(ProductSubscriberInterface $subscriber): void
    {
        SubscriberRepository::factory()
            ->insert([
                'product_id' => $subscriber->getProductId(),
                'email' => $subscriber->getEmail()
            ])
        ;
    }

    public static function notifySubscribers(string $productId, string $productName): void
    {
        $subscribers = SubscriberRepository::factory()->where('product_id', $productId)->get();

        foreach ($subscribers as $subscriber) {
            $message = (new Swift_Message('Product available'))
                ->setFrom('contact@shop.com')
                ->setTo($subscriber['email'])
                ->setBody(sprintf(self::MAIL_NOTIFICATION_MESSAGE, $productName))
            ;

            App::getInstance()->getMailer()->send($message);
        }
    }
}

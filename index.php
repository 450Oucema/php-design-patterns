<?php

use App\Core\Command\Orderer;
use App\Core\Command\OrderQueue;
use App\Core\Factory\CartFactory;
use App\Core\Observer\Product\ProductSubject;
use App\Core\Observer\Product\ProductSubscriber;
use App\Core\Twig\Loader;
use App\Domain\Entity\Cart;
use App\Domain\Entity\Order;
use App\Domain\Entity\OrderItem;
use App\Domain\Entity\Product;
use App\Domain\Repository\OrderRepository;
use App\Domain\Repository\ProductRepository;
use PhpOrm\DB;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once "./vendor/autoload.php";

session_start();
DB::config(__DIR__ . "\config\database.php");

$app = AppFactory::create();
$cart = CartFactory::fromSession();
$twig = Loader::getInstance()->getTwig();


$app->get('/', function (Request $request, Response $response, array $args) use ($twig, $cart) {
    $products = $products = ProductRepository::factory()->get();
    $response->getBody()->write(
        $twig->render('index.html.twig', [
            'hello' => 'Hello world',
            'cart' => $cart,
            'products' => $products
        ])
    );

    return $response;
});

$app->get('/cart', function (Request $request, Response $response) use ($twig, $cart) {
    $response->getBody()->write(
        $twig->render('cart.html.twig', [
            'cart' => $cart,
        ])
    );

    return $response;
});

$app->get('/orders', function (Request $request, Response $response) use ($twig) {
    $orders = OrderRepository::factory()->where('username', $request->getQueryParams()['username'])->get();

    $response->getBody()->write(
        $twig->render('orders.html.twig', [
            'orders' => $orders,
        ])
    );

    return $response;
});

$app->get('/add-to-cart/{product}', function (Request $request) use ($app, $cart) {
    $product = ProductRepository::factory()->find($request->getAttribute('product'));
    $cart->addCartItem(Product::fromAttributes($product));
    Cart::save($cart);

    header('Location: /cart');
});

$app->post('/cart/order', function (Request $request) {
    $definitiveCart = $request->getParsedBody()['cart'];
    $username = $request->getParsedBody()['username'];
    $order = new Order($username);

    foreach ($definitiveCart as $productId => $count) {
        $productArray = ProductRepository::factory()->find($productId);

        if (is_array($productArray)) {
            $product = Product::fromAttributes($productArray);
            $orderItem = new OrderItem($product, ($product->getPrice() * $count), $count);
            $order->addOrderItems($orderItem);
        }
    }

    $orderer = new Orderer($order);
    $orderQueue = new OrderQueue();
    $orderQueue->addOrder($orderer);
    $orderQueue->start();
    CartFactory::clear();

    header('Location: /orders?username=' . $username);
});

$app->post('/notify-me/{id}', function (Request $request) {
    $email = $request->getParsedBody()['email'];
    $id = $request->getAttribute('id');

    $subscriber = new ProductSubscriber($email, $id);
    ProductSubject::addSubscriber($subscriber);

    header('Location: /');
});

$app->get('/admin/product/{id}/add', function (Request $request, Response $response, array $args) {
    $id = $request->getAttribute('id');
    $product = ProductRepository::factory()->find($id);
    ProductRepository::factory()->where('id', $id)->update(['stock' => strval((intval($product['stock']) + 1))]);
    ProductSubject::notifySubscribers($id, $product['name']);

    header('Location: /');
});

$app->get('/logout', function (Request $request) {
    session_destroy();
    header('Location: /');
});

$app->run();

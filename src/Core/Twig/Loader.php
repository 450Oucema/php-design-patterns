<?php

namespace App\Core\Twig;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class Loader
{
    private static $_instance;
    private FilesystemLoader $loader;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . "\..\..\..\\templates");
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Loader();
        }

        return self::$_instance;
    }

    public function getLoader(): FilesystemLoader
    {
        return $this->loader;
    }

    public function getTwig(): Environment
    {

        $twig = new Environment($this->loader, [
            'debug' => true
        ]);

        $twig->addExtension(new ProductStockExtension());
        $twig->addExtension(new DebugExtension());

        return $twig;
    }
}

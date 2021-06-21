<?php

namespace App;

use PhpOrm\DB;
use Swift_Mailer;

class App
{
    private static $_instance;
    private DB $db;
    private Swift_Mailer $mailer;

    public function __construct()
    {
        $this->db = new DB();
        $transport = new \Swift_SmtpTransport('localhost', '1025');
        $this->mailer = new Swift_Mailer($transport);
    }


    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }

        return self::$_instance;
    }

    public function getDatabase(): DB
    {
        return $this->db;
    }

    public function getMailer(): Swift_Mailer
    {
        return $this->mailer;
    }
}

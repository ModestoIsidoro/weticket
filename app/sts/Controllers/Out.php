<?php

namespace App\sts\Controllers;

if (!defined("FORBIDEN")) {
    header("location: /");
}

class Out
{

    public function index()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_phone']);
        unset($_SESSION['user_bi']);

        session_unset();
        session_destroy();
        
        header("location: /");
    }
}

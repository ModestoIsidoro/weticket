<?php

namespace App\sts\Controllers;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

class Account
{

    public function index()
    {
        $loadView = new \Core\ConfigView("sts/Views/account/account");
        $loadView->showViewAccount();
    }
}

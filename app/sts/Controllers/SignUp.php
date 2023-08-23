<?php

namespace App\sts\Controllers;

if(!defined("FORBIDEN")){
    header("Location: /");
}

class SignUp {

    public function index()
    {
        $loadView = new \Core\ConfigView("sts/Views/signin/signup");
        $loadView->showViewSignUp();
    }
}
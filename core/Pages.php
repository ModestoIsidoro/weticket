<?php

namespace Core;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

class Pages
{
    private array $publicPages;
    private array $privatePages;
    private string $url;

    //CLASS RESPONSABLE TO VERIFY IS CURRENT URL EXIST
    public function publicPage($url)
    {
        $this->publicPages = ['home', 'search', 'seat', 'signin', 'signup', 'login', 'register'];
        $this->privatePages = ['account', 'travels'];
        $this->url = $url;

        if (in_array($this->url, $this->publicPages)) {

            $this->result = $this->url;
        } else {

            $this->privatePages();
        }
    }

    private function privatePages()
    {
        if (in_array($this->url, $this->privatePages)) {

            $this->verifyLogin();
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    private function verifyLogin()
    {
        if (
            isset($_SESSION['user_id']) and
            isset($_SESSION['user_name']) and
            isset($_SESSION['user_email']) and
            isset($_SESSION['user_phone']) and
            isset($_SESSION['user_bi'])
        ) {
            $this->result = $this->url;
        } else {
            header("Location: signin");
        }
    }
}

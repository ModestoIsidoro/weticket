<?php

namespace App\sts\Controllers;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

class Login
{

    private array $dados;
    private $dadosForm;

    public function index()
    {
        $this->dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (isset($this->dadosForm['submit'])) {
            extract($this->dadosForm);

            if (empty($email) or empty($password)) {
                $_SESSION['msg'] = "<p style = 'color:red; text-align: center;'>Preencha todos os campos.</p>";
                $this->dados['form'] = $this->dadosForm;

                $loadView = new \Core\ConfigView("sts/Views/signin/signin", $this->dados);
                $loadView->showViewSignIn();
            } else {

                $loadModel = new \App\sts\Models\LoginModel();
                $loadModel->index($this->dadosForm);

                if ($loadModel->getLogin()) {

                    $loadView = new \Core\ConfigView("sts/Views/account/account");
                    $loadView->showViewAccount();
                    
                } else {
                    $this->dados['form'] = $this->dadosForm;

                    $loadView = new \Core\ConfigView("sts/Views/signin/signin", $this->dados);
                    $loadView->showViewSignIn();
                }
            }
        }
    }
}

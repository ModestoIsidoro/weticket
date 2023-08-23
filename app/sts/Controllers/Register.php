<?php

namespace App\sts\Controllers;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

class Register
{

    private $data;
    private $formData;

    public function index()
    {
        $this->formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        extract($this->formData);

        if (isset($submit)) {

            if (empty($name) or empty($email) or empty($phone) or empty($bi) or empty($password)) {
                $_SESSION['msg'] = "<p style = 'color:red; text-align: center;'>Preencha todos os campos.</p>";

                $this->data['form'] = $this->formData;

                $loadView = new \Core\ConfigView("sts/Views/signin/signup", $this->data);
                $loadView->showViewSignUp();
            } else {
                $this->formData['password'] = password_hash($this->formData['password'], PASSWORD_DEFAULT);

                $loadModel = new \App\sts\Models\RegisterModel();
                $loadModel->index($this->formData);

                if ($loadModel->getRegistred()) {

                    $loadView = new \Core\ConfigView("sts/Views/account/account");
                    $loadView->showViewAccount();
                } else {

                    $this->formData['password'] = "";
                    $this->data['form'] = $this->formData;

                    $loadView = new \Core\ConfigView("sts/Views/signin/signup", $this->data);
                    $loadView->showViewSignUp();
                }
            }
        }
    }
}

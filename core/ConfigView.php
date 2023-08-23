<?php

namespace Core;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

//CLASS RESPONSABLE TO CALL ALL VIEW
class ConfigView
{

    private string $name;
    private $data;

    public function __construct($name, array $data = null)
    {
        $this->name = $name;
        $this->data = $data;
    }

    public function showViewHome()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/home/includes/headerHome.php";
            include_once "app/sts/Views/includes/menu.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/home/includes/footerHome.php";
            include_once "app/sts/Views/home/includes/bottomHome.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    public function showViewSearch()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/search/includes/headerSearch.php";
            include_once "app/sts/Views/includes/menu.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/includes/footer.php";
            include_once "app/sts/Views/search/includes/bottomSearch.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    public function showViewAccount()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/account/includes/headerAccount.php";
            include_once "app/sts/Views/includes/menu.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/includes/footer.php";
            include_once "app/sts/Views/account/includes/bottomAccount.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    public function showViewTravels()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/travels/includes/headerTravels.php";
            include_once "app/sts/Views/includes/menu.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/includes/footer.php";
            include_once "app/sts/Views/travels/includes/bottomTravels.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    public function showViewSeat()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/seat/includes/headerSeat.php";
            include_once "app/sts/Views/includes/menu.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/includes/footer.php";
            include_once "app/sts/Views/seat/includes/bottomSeat.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    public function showViewSignIn()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/signin/includes/headerSignIn.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/signin/includes/bottomSignIn.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }

    public function showViewSignUp()
    {
        if (file_exists("app/" . $this->name . ".php")) {

            include_once "app/sts/Views/signin/includes/headerSignUp.php";
            include_once "app/" . $this->name . ".php";
            include_once "app/sts/Views/signin/includes/bottomSignIn.php";
        } else {

            $_SESSION['msg'] = "<p style= 'color:red;'>Erro 404: Página não encontrada.</p>";
            header("Location: /");
        }
    }
}

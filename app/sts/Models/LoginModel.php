<?php

namespace App\sts\Models;

if (!defined("FORBIDEN")) {
    header("location: /");
}

class LoginModel extends Connect
{

    private object $conn;
    private array $dados;
    private bool $login = false;
    private $result_db;

    public function getLogin()
    {
        return $this->login;
    }

    public function index(array $dados)
    {
        $this->conn = $this->connection();
        $this->dados = $dados;

        $this->readUsers();
    }

    private function readUsers()
    {
        $sql_query = "SELECT `id`, `name`, `email`, `bi`, `phone`, `password` FROM `users` WHERE `email`=? LIMIT 1;";
        $result_sql = $this->conn->prepare($sql_query);
        $result_sql->bindValue(1, $this->dados['email']);

        $result_sql->execute();
        $this->result_db = $result_sql->fetch();

        if ($this->result_db) {

            $this->verifyPassword();

        } else {
            $_SESSION['msg'] = "<p style = 'color:red; text-align: center;'>Usuário não encontrado.</p>";
            $this->login = false;
        }
    }

    private function verifyPassword()
    {
        if(password_verify($this->dados['password'], $this->result_db['password'])) {
            
            $_SESSION['user_id'] = $this->result_db['id'];
            $_SESSION['user_name'] = $this->result_db['name'];
            $_SESSION['user_email'] = $this->result_db['email'];
            $_SESSION['user_phone'] = $this->result_db['phone'];
            $_SESSION['user_bi'] = $this->result_db['bi'];

            $this->login = true;
        } else {
            $_SESSION['msg'] = "<p style = 'color:red; text-align: center;'>Senha incorrecta.</p>";
            $this->login = false;
        }
    }
}

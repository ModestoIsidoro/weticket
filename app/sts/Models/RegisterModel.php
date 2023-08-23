<?php

namespace App\sts\Models;

if (!defined("FORBIDEN")) {
    header("Location: /");
}

class RegisterModel extends Connect
{

    private object $conn;
    private $data;
    private bool $registred = false;
    private $result_db;

    public function getRegistred()
    {
        return $this->registred;
    }

    public function index(array $formData)
    {
        $this->conn = $this->connection();
        $this->data = $formData;
        $this->verifyDuble();
    }

    private function verifyDuble()
    {
        $sql_query = "SELECT * FROM `users` WHERE `email`=?";
        $result_sql = $this->conn->prepare($sql_query);
        $result_sql->bindValue(1, $this->data['email']);
        $result_sql->execute();

        if ($result_sql->rowCount()) {
            $_SESSION['msg'] = "<p style = 'color:red; text-align: center;'>Email já esta sendo usado, não pode ser repetido.</p>";
            $this->registred = false;
        } else {

            $sql_query = "SELECT * FROM `users` WHERE `bi`=?";
            $result_sql = $this->conn->prepare($sql_query);
            $result_sql->bindValue(1, $this->data['bi']);
            $result_sql->execute();

            if ($result_sql->rowCount()) {
                $_SESSION['msg'] = "<p style = 'color:red; text-align: center;'>Número de BI já esta sendo usado, não pode ser repetido.</p>";
                $this->registred = false;
            } else {
                $this->createUsers();
            }
        }
    }

    private function createUsers()
    {

        $sql_Query = "INSERT INTO `users`(`name`, `email`, `bi`, `phone`, `password`, `created`) VALUES (?, ?, ?, ?, ?, NOW())";
        $result_sql = $this->conn->prepare($sql_Query);
        $result_sql->bindValue(1, $this->data['name']);
        $result_sql->bindValue(2, $this->data['email']);
        $result_sql->bindValue(3, $this->data['bi']);
        $result_sql->bindValue(4, $this->data['phone']);
        $result_sql->bindValue(5, $this->data['password']);

        $result_sql->execute();

        if ($result_sql->rowCount()) {

            $this->readUsers();
        } else {
            $this->registred = false;
        }
    }

    private function readUsers()
    {
        $sql_query = "SELECT `id`, `name`, `email`, `bi`, `phone`, `password` FROM `users` WHERE `email`=? LIMIT 1;";
        $result_sql = $this->conn->prepare($sql_query);
        $result_sql->bindValue(1, $this->data['email']);

        $result_sql->execute();
        $this->result_db = $result_sql->fetch();

        $_SESSION['user_id'] = $this->result_db['id'];
        $_SESSION['user_name'] = $this->result_db['name'];
        $_SESSION['user_email'] = $this->result_db['email'];
        $_SESSION['user_phone'] = $this->result_db['phone'];
        $_SESSION['user_bi'] = $this->result_db['bi'];

        $this->registred = true;
    }
}

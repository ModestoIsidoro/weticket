<?php

namespace App\sts\Models;

/*if (!defined("FORBIDEN")) {
    header("location: /");
}
*/

class Connect
{

    private string $db = "mysql";
    private string $host = "localhost";
    private string $username = "root";
    private string $dbname = "weticket";
    private string $password = "";
    private int $port = 3306;
    private object $conn;

    protected function connection()
    {

        try {
            $this->conn = new \PDO($this->db . ":host=" . $this->host . ";dbname=" . $this->dbname . ";port=" . $this->port . ";charset=utf8mb4;", $this->username, $this->password);

            return $this->conn;
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}

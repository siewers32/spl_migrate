<?php

namespace App\Application;

class Database
{
    private string $host, $dbname, $user, $password;

    public function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->dbname = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->port = $_ENV['DB_PORT'];
    }

    public function getConnection()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname;
            $dbh = new \PDO($dsn, $this->user, $this->password);
            $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (\PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
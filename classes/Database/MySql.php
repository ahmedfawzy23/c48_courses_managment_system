<?php

namespace Classes\Database;

// use Classes\Database\DatabaseInterface;
use PDO;
use PDOException;

class MySql implements DatabaseInterface
{

    private $host = DB_HOST;
    private $dbName = DB_NAME;
    private $user = DB_USERNAME;
    private $password = DB_PASSWORD;
    public function connect()
    {
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->user, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

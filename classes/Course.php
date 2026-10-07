<?php

namespace Classes;

use Classes\Database\DatabaseInterface;
use PDO;

class Course
{
    private $conn;
    public function __construct(DatabaseInterface $db)
    {
        $this->conn = $db->connect();
    }

    // all

    public function all()
    {
        $sql = "SELECT *
        FROM courses
        ORDER BY id DESC;";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

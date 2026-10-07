<?php

namespace Classes;

use Classes\Database\DatabaseInterface;
use PDO;

class Enrollment
{
    private $conn;
    public function __construct(DatabaseInterface $db)
    {
        $this->conn = $db->connect();
    }

    // all

    public function enroll($studentId, $courseId)
    {
        $sql = "INSERT INTO `enrollments`(`student_id`, `course_id`)
        VALUES (:student_id,:course_id)";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ":student_id" => $studentId,
            ":course_id" => $courseId
        ]);
    }
}

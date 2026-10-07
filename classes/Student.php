<?php

namespace Classes;

use Classes\Database\DatabaseInterface;
use PDO;

class Student
{
    private $conn;
    public function __construct(DatabaseInterface $db)
    {
        $this->conn = $db->connect();
    }

    // all

    public function all()
    {
        $sql = "SELECT s.*, COUNT(e.id) enrolled_courses_count
        FROM students s
        LEFT JOIN enrollments e
        ON s.id = e.student_id
        GROUP BY s.id
        ORDER BY s.id DESC;";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // find
    public function find($id)
    {
        $sql = "SELECT s.*, COUNT(e.id) enrolled_courses_count
        FROM students s
        LEFT JOIN enrollments e
        ON s.id = e.student_id
        WHERE s.id = :id
        GROUP BY s.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([":id" => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    // create
    public function create($data)
    {
        $sql = "INSERT INTO students (name, email, phone) Values (:name, :email, :phone)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }
    // update
    public function update($data)
    {
        $sql = "UPDATE students set name = :name, email = :email, phone = :phone
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }
    // delete

    public function delete($id)
    {
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ":id" => $id
        ]);
    }


    public function count()
    {
        $sql = "SELECT COUNT(*) FROM students ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchColumn();
    }
    public function getCoursers($studentId)
    {
        $sql = "SELECT c.*, e.id, e.enrolled_at
                FROM courses c JOIN enrollments e
                ON c.id = e.course_id
                WHERE e.student_id = :studentId;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ":studentId" => $studentId
        ]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

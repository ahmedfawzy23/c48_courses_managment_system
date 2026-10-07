<?php
require_once __DIR__ . "/../App.php";
$id = $request->get('id');
if (!isset($id) || empty($id)) {
    $request->redirect('index.php');
}
$studentData = $student->find($id);
if (empty($studentData)) {
    $session->push("errors", "user not found");
    $request->redirect('index.php');
}

$student->delete($id) ? $session->push("success", "Student deleted successfully")
    : $session->push("errors", "Error While delete Student");
$request->redirect(BASE_URL . "/students/index.php");

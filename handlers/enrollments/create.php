<?php

use Classes\Mails\EnrollMail;
use Classes\Validation\Validator;

require_once __DIR__ . "/../../App.php";

if ($request->isPost()) {
    $studentId = $request->post('student_id');
    $courseId = $request->post('course_id');

    // validation 
    $validator = new Validator([
        "student_id" => ['required', "exists:students,id"], // min:3 max:5
        "course_id" => ['required', "exists:courses,id"], // unique:students,email
    ], $_REQUEST);

    if ($validator->hasErrors()) {
        $session->set("errors", $validator->getErrors());
        $request->redirect(BASE_URL . "/enrollments/create.php");
    }

    if ($enrollment->enroll($studentId, $courseId)) {

        $session->push("success", "Student Enrolled successfully");
        $mail = new EnrollMail();

        $mail->sendMail($student->find($studentId));
    } else {

        $session->push("errors", "Error While Insert Enroll");
    }
    $request->redirect(BASE_URL . "/enrollments/index.php");
} else {
    $request->redirect(BASE_URL . "/enrollments/index.php");
}

// request => inputs

// key => required, string, unique:users,email

// validate()
// getMessage()

// makeSound()
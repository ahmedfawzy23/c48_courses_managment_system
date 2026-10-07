<?php

use Classes\Validation\Validator;

require_once __DIR__ . "/../../App.php";

if ($request->isPost()) {
    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');

    // validation 
    $validator = new Validator([
        "name" => ['required', "min:3", "max:20"], // min:3 max:5
        "email" => ['required', "email", "unique:students,email"], // unique:students,email
        "phone" => ['required'],
    ], $_REQUEST);

    if ($validator->hasErrors()) {
        $session->set("errors", $validator->getErrors());
        $request->redirect(BASE_URL . "/students/create.php");
    }

    $student->create([
        ":name" => $name,
        ":email" => $email,
        ":phone" => $phone,
    ]) ? $session->push("success", "Student Created successfully")
        : $session->push("errors", "Error While Insert Student");
    $request->redirect(BASE_URL . "/students/index.php");
} else {
    $request->redirect(BASE_URL . "/students/index.php");
}

// request => inputs

// key => required, string, unique:users,email

// validate()
// getMessage()

// makeSound()
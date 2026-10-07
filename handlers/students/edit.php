<?php

use Classes\Validation\Validator;

require_once __DIR__ . "/../../App.php";

if ($request->isPost()) {

    $id = $request->get('id');
    if (!isset($id) || empty($id)) {
        $request->redirect(BASE_URL . "/students/index.php");
    }
    $studentData = $student->find($id);
    if (empty($studentData)) {
        $session->push("errors", "user not found");
        $request->redirect(BASE_URL . "/students/index.php");
    }


    $name = $request->post('name');
    $email = $request->post('email');
    $phone = $request->post('phone');

    // validation 
    $validator = new Validator([
        "name" => ['required', "min:3", "max:20"], // min:3 max:5
        "email" => ['required', "email", "unique:students,email," . $id], // unique:students,email
        "phone" => ['required'],
    ], $_REQUEST);

    if ($validator->hasErrors()) {
        $session->set("errors", $validator->getErrors());
        $request->redirect(BASE_URL . "/students/edit.php?id=$id");
    }

    $student->update([
        ":name" => $name,
        ":email" => $email,
        ":phone" => $phone,
        ":id" => $id
    ]) ? $session->push("success", "Student Updated successfully")
        : $session->push("errors", "Error While Update Student");
    $request->redirect(BASE_URL . "/students/index.php");
} else {
    $request->redirect(BASE_URL . "/students/index.php");
}

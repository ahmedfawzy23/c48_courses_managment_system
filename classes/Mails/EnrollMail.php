<?php

namespace Classes\Mails;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EnrollMail
{

    public function sendMail($studentData)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ahmedfawzy.route4@gmail.com';                     //SMTP username
            $mail->Password   = 'gxlkkmvwvkewcaxb';                               //SMTP password
            $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
            $mail->Port       = 587;  // 587                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('coursesAcademy@route.com', 'Route Academy');
            $mail->addAddress($studentData->email, $studentData->name);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'Enrolled Succsfully <hr> Welcome to our academy 🤍';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            // die($studentData->email);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            file_put_contents("mailLogs.txt", $e);
        }
    }
}

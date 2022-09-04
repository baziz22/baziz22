<?php
namespace PHPMailer\PHPMailer;
class Sendemail_Model {

    public function send_message($fields){
        $m = new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth = true;
        //To debug this by passing 1 or 2 depending on the level you want to debug at.
        // So if you are having any problems, do go ahead and use debug code.
        //$m->SMTPDebug = 1;
        $m->Host = 'smtp.google.com';
        $m->Username = 'khaimaaaa';
        $m->Password = 'Badr0350!';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;

        $m->isHTML();
        $m->Subject = 'Contact Form Submission';
        $m->Body = 'Email from: ' . $fields['contact-full-name'] . ' (' . $fields['contact-email'] . ' ) <p>' . $fields['contact-subject'] . '</p> ';
        // You could use addReplyTo, but google doesn't support that.
        //$m->addReplyTo($address, $name='');
    }
}
<?php
namespace PHPMailer\PHPMailer;
 use \PHPMailer;
class Sendemail_Model extends Model{

    public function send_message($fields){
        $m = new \PHPMailer\PHPMailer;
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
        // You could use addReplyTo, but google doesn't support that.
        //$m->addReplyTo($address, $name='');
        //$m->addReplyTo($fields['contact-email'], $fields['contact-full-name']);
        $m->Body = 'Email from: ' . $fields['contact-full-name'] . ' (' . $fields['contact-email'] . ')<p>' . $fields['contact-subject'] . '</p> ';
        //$m->AltBody = // use altBody which is basically a plain text body instead of HTML body.
        // If you don't include this, Gmail will identify this as a Root User.
        $m->FromName = "ContactFormbbins.me";
        $m->addAddress('baziz22@gmail.com', 'Bader Binsunbil');
        if($m->send()) {
            header("Location: ../api");
            die();
        } else {
            $errors[] = "Sorry, we could not send message. Please try again later"; 
        }
        
    }
}
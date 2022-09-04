<?php
namespace PHPMailer\PHPMailer;
class Sendemail_Model {

    public function send_message(){
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

        $m->Subject = '';
        $m->Body = ''
        // You could use addReplyTo, but google doesn't support that.
        //$m->addReplyTo($address, $name='');
    }
}
<?php
namespace PHPMailer\PHPMailer;
class Sendemail_Model {

    public function send_message(){
        $m = new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth = true;
        
        $m->Host = 'smtp.google.com';
        $m->Username = 'khaimaaaa';
        $m->Password = 'Badr0350!';
        $m->SMTPSecure = 'ssl';
        $m->Port = 465;
    }
}
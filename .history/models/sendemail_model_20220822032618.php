<?php
namespace PHPMailer\PHPMailer;
class Sendemail_Model {

    public function send_message(){
        $m = new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth = true;
        $m->Host = 'smtp.google.com';
        $m->Username = baziz22;
        
        $m->secure
    }
}
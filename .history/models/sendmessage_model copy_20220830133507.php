<?php
class Sendemail_Model extends Model{

    public function send_message($fields){
        function url(){
            echo "Bader Binsunbil".BR;
            return sprintf(
                "%s://%s",
                isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                $_SERVER['SERVER_NAME']
            );
        }
        echo "URL: " . url();
        $rdir = str_replace("\\", "/", __DIR__).
        $where_at = $fields['settle'];
        
        $sender_full_name = $fields['full_name'];
        $sender_email = $fields['contact_email'];
        $sender_subject = $fields['subject'];
        $sender_message = $fields['contact_message'];
         
    }
}
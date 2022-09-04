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
        $where_at = $fields['settle'];
        
        $sender_full_name = $fields['full_name'];
        $sender_email = $fields['contact_email'];
        $sender_subject = $fields['subject'];
        $sender_message = $fields['contact_message'];
        $sql = 'INSERT INTO contact_us (senderuser_name, user_email, user_password) VALUES(:username, :email, :password)';
        $stmt = $this->db->connect()->prepare($sql); 
    }
}
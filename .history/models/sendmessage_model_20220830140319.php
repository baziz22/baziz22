<?php
class Sendmessage_Model extends Model{

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
        $sql = 'INSERT INTO contact_us (sender_name, sender_email, sender_subject, sender_comment) VALUES(:sender_full_name, :sender_email, :sender_subject, :sender_message)';
        $stmt = $this->db->connect()->prepare($sql); 
        if ($stmt->db->execute()) {
          return true;
        } else {
            return false;
        }
        if($stmt->execute()){
          $message_success = 'Looks Good! '.BR.'Please Check Your Email to activate your account.';
          header("Location: ../register?message_success=$message_success&wrong=0");
          
        }else{
            $message_success = 'Something went wrong! '.BR;
            header("Location: ../register?message_success=$message_success&wrong=1");
            
        };
        $stmt->closeCursor();
    }
}
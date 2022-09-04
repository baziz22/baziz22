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
         
            // Set Message
            //$mailheader = "From:" . $name . "<" . $email . ">\r\n";
            $sender_message .= "Email from: " . $sender_full_name . "<" . $sender_email . ">\r\n";
            $sender_message .= "Message: <br />";
            $sender_message .= nl2br($sender_message);
            $sender_message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

            // Set From: header
            $from =  $sender_full_name . " <" . $sender_email . ">";

            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: ". 'baziz22@gmail.com' . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            echo $headers;

            //ini_set("sendmail_from", $mail_to); // for windows server
            //$reply_to = '-steveclass@profperry.com';  //Can Specify a different Return-To email!
	        //$mail = mail($mail_to, $sender_subject, $sender_message, $headers, $reply_to);
            $mail = mail($mail_to, $sender_subject, $sender_message, $headers);

            if ($mail) { 
                echo "OK";
                header("Location: ../" . $where_at); 
            }
            else { echo "Something went wrong. Please try again."; }

        
    }
}
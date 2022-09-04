<?php
class send_email extends Controller{
   function __construct(){
       parent::__construct();
   }

   public function contact_info(){
      echo "You reach contact info";
      
      $errors = [];
      echo $_POST['contact-full-name'];
      pre_r($_POST);
      // Replace this with your own email address
      $to = 'baziz22@gmail.com';

      function url(){
         echo "Bader Binsunbil";
      return sprintf(
         "%s://%s",
         isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
         $_SERVER['SERVER_NAME']
         );
      }

      if($_POST) {

   $full_name = test_input($_POST['contact-full-name']);
   $contact_email = test_input($_POST['contact-email']);
   $subject = test_input($_POST['contact-subject']);
   $contact_message = test_input($_POST['contact-message']);
   if ($subject == '') { $subject = "Contact Form Submission"; }
   // Store fields in an array
      $fields = [
         'full_name' => 'contact-full-name',
         'contact_email' => 'contact-email',
         'subject' => 'contact-subject',
         'contact_message' => 'contact-message',
      ];

      for
	

   // Set Message
   $contact_message .= "Email from: " . $full_name . "<br />";
	$contact_message .= "Email address: " . $contact_email . "<br />";
   $contact_message .= "Message: <br />";
   $contact_message .= nl2br($contact_message);
   $contact_message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

   // Set From: header
   $from =  $full_name . " <" . $contact_email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $contact_email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

      }else {
         $errors = ["ERROR"];
      }
   }
}
?>
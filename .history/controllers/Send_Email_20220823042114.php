<?php
class send_email extends Controller{
   function __construct(){
       parent::__construct();
   }

   public function contact_info(){
      echo "You reach contact info";
      $errors = [];
      $mail_errors = [];
      pre_r($_POST);
      if(isset($_POST['contact-full-name'], $_POST['contact-email'], $_POST['contact-subject'], $_POST['contact-message'])) {

         //$full_name = test_input($_POST['contact-full-name']);
         //$contact_email = test_input($_POST['contact-email']);
         //$subject = test_input($_POST['contact-subject']);
         //$contact_message = test_input($_POST['contact-message']);
         //if ($subject == '') { $subject = "Contact Form Submission"; }
         // Store fields in an array
         $fields = [
            'settle' => $_GET['url'],
            'full_name' => $_POST['contact-full-name'],
            'contact_email' => $_POST['contact-email'],
            'subject' => $_POST['contact-subject'],
            'contact_message' => $_POST['contact-message'],
         ];

         foreach($fields as $field => $data) {
            if(empty($data)) {
               $errors[] = "The ". $field . " is Required!";
            }
         }
         pre_r($errors);
         if(!$errors) {
            $this->loadModel('sendemail');
            $this->model->send_message($fields);
         }
         /*       
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
         $headers .= "Content-Type: text/html; charset=utf-8\r\n"; */

      }else {
         $errors = ["ERROR"];
      }
      $_SESSION['errors'] = $errors;
      $_SESSION['mail-errors'] = $mail_errors;
      $_SESSION['fields'] = $fields;
      //header("Location: ../index");
   }
}
?>
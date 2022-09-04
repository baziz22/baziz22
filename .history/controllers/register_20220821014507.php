<?php

class Register extends Controller{
    function __construct() {
        parent::__construct();
        echo "Register::Controller()";
    }
    function index() {
        $this->view->render('users/register');
    }
    public function register_run(){
        $register_successful = false;
        $looks_good = false;
// Define variables and set them to empty string.
$message_warning = '';
$message_success = '';
$register_user_name = $register_email = $register_password = $register_password_confirm = '';
$register_user_name_error = $register_email_error = $register_password_error = $register_password_confirm_error = '';

function isValidPassword($check_password){
    $message_error = '';
    $check_uppercase = !preg_match('@[A-Z]@', $check_password);
    $check_lowercase = !preg_match('@[a-z]@', $check_password);
    $check_number = !preg_match('@[0-9]@', $check_password);
    $check_specialChars = !preg_match('@[^\w]@', $check_password);
    //$check_length = !preg_match('@.{8,}@', $check_password); 
    $check_length = strlen($check_password);
    
    // Validate password
    if($check_uppercase) {
        $message_error .=  "Uppercase not included! ".BR;
    }
    if($check_lowercase) {
        $message_error .= "Lowercase not included! ".BR;
    }
    if($check_number) {
        $message_error .= "number not included! ".BR;
    }
    if($check_specialChars) {
        $message_error .= "special character not included! ".BR;
    }
    if($check_length < 8){
        $message_error .= "Length is too short! ".BR;
    }
    if($check_length > 20){
        $message_error .= "Length is too Long! ".BR;
    }
    //echo "Message_Error: ". $message_error;
    return $message_error;
}
pre_r($_POST);


        //$data = array();
        if(!$looks_good){
            $register_user_name = test_input($_POST['register-user-name']);
            $register_email = test_input($_POST['register-email']);
            $register_password = test_input($_POST['register-password']);
            $register_password_confirm = test_input($_POST['register-password-confirm']);
            if (empty($register_user_name)){
                $register_user_name_error = "Username is REQUIRED!".BR;
                $message_warning .= "Username is REQUIRED!".BR;
            }
            if(!preg_match("/^[a-zA-Z0-9._]*$/",$register_user_name)){
                $register_user_name_error .= "Username: Letters, Numbers, _ , - , . , Only allowed".BR;
                $message_warning .= "Letters, Numbers, _ , - , . ,Only allowed".BR; 
            }
            if(!preg_match('@.{5,}@', $register_user_name)){
                $register_user_name_error .= "Username is to short." .BR;
                $message_warning .= "Username: at least 5 characters".BR; 
            }
            //$this->loadModel('register');
            /* if(!$this->model->is_username_available($register_user_name)){
                $register_user_name_error .= $register_user_name . " is not available" .BR;
                $message_warning .= $register_user_name . " is already registered!".BR; 
            } */
            /* if(!$this->model->is_email_available($register_email)){
                $register_email_error .= $register_email . "  is already registered!" .BR;
                $message_warning .= $register_email . " is already registered!".BR; 
            } */
            if(empty($register_email)){
                $register_email_error = "Email is REQUIRED!".BR;
                $message_warning .= "Email is REQUIRED!".BR;
            }
            if(!filter_var($register_email, FILTER_VALIDATE_EMAIL)){
                $register_email_error .= "Invalid Email".BR;
                $message_warning  .= "Please Enter a Valid Email Address".BR;
            }
            if (empty($register_password)){
                $register_password_error = "Password is REQUIRED!".BR;
                $message_warning .= "Password can't be empty".BR;
            }
            if(!isValidPassword($register_password) == '') {
                $register_password_error .= isValidPassword($register_password).BR;
            }
            if (empty($register_password_confirm)){
                $register_password_confirm_error = "Password confirmation is REQUIRED!".BR;
                $message_warning .= "Confirmation Password can't be empty".BR;
            }
            if($register_password != $register_password_confirm){
                    $register_password_confirm_error = "Passwords not match".BR;
                    $message_warning = "Passwords doesn't match";
            }
            echo "", $message_warning == '' && $register_user_name_error == '' && $register_email_error == ''
            if($message_warning == '' && $register_user_name_error == '' && $register_email_error == ''){
                if(isValidPassword($register_password) == '' && $register_password == $register_password_confirm) {
                    // Hashing using BCRYPT
                    $this->loadModel('hash');
                    $register_password = test_input($_POST['register-password']);
                    $hashing = $this->model->create($register_password);
                    echo "Hashing using BCRYPT".BR;
                    echo $hashing;
                    $bcrypt_verify = $this->model->check($register_password, $hashing);
                    echo BR;
                    echo $bcrypt_verify;
                    $looks_good = true;
                }
            } else {
                echo "There is something wrong happened!";
                //header("Location: ../register?register_user_name_error=$register_user_name_error&register_email_error=$register_email_error&register_password_error=$register_password_error&register_password_confirm_error=$register_password_confirm_error&message_warning=$message_warning&register_user_name=$register_user_name&register_email=$register_email&wrong=1");
            }
        }
        echo BR .'register-user-name : '. $register_user_name . BR;
        echo BR .'register-email : '. $register_email . BR;
        echo BR .'register-password : '. $register_password . BR;
        //BR .'register-hashing-password : '. $hashing . BR;
        
        if($looks_good){
            // Talk to the register_model
            $this->model->register_user($register_user_name, $register_email,$register_password_confirm);
        }
    }
}

?>
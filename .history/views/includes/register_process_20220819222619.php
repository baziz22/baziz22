<?php
$register_successful = false;
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
if (isset($_POST['register-submit-btn'])){
    $register_user_name = test_input($_POST['register-user-name']);
    if (empty($register_user_name)){
        $register_user_name_error = "Username is REQUIRED!".BR;
    } else {
        if(!preg_match("/^[a-zA-Z0-9._]*$/",$register_user_name)){
            $register_last_name_error = "Letters, Numbers, - , . , Only allowed".BR;
            $message_warning .= "Letters, Numbers, - , . , Only allowed".BR; 
        }
    }
    $register_email = test_input($_POST['register-email']);
    if (empty($register_email)){
        $register_email_error = "Email is REQUIRED!".BR;
    } else {
        // Check if field has only letter or whitespace
        if(!filter_var($register_email, FILTER_VALIDATE_EMAIL)){
            $register_email_error = "Invalid Email".BR;
            $message_warning  .= "Please Enter a Valid Email Address".BR;
        }
    }
    $register_password = test_input($_POST['register-password']);
    if (empty($register_password)){
        $register_password_error = "Password is REQUIRED!".BR;
    } else {
        if(!isValidPassword($register_password) == ''){
            $register_password_error .= isValidPassword($register_password).BR;
        }
        
    }
    $register_password_confirm = test_input($_POST['register-password-confirm']);
    if (empty($register_password_confirm)){
        $register_password_confirm_error = "Password confirmation is REQUIRED!".BR;
    } else {
        if($register_password != $register_password_confirm){
            $register_password_confirm_error = "Passwords not match".BR;
        } else {
            // Hashing using BCRYPT
            echo "Hashing using BCRYPT".BR;
            $bcrypt_hash = password_hash($register_password, PASSWORD_BCRYPT, ['cost' => 10]);
            echo $bcrypt_hash;
            $bcrypt_verify = password_verify($register_password, $bcrypt_hash);
            echo BR;
            echo $bcrypt_verify;
        }
    }

    // Check the last step before registering a user.
    if($register_user_name_error == '' && $register_email_error == '' && $register_password__error == '' $register_password_confirm_error == ''){
        $message_success = 'Every Thing Looks Good!' .BR . 'You have been REGISTERED successfully.' .BR . 'Please Check Your Email to activate your account.';
        //unset($_POST['register_submit_btn']);
        $register_successful = true;
    } else {
        echo "There is an error!";
    }
}
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
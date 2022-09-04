<?php 
    include_once URLROOT . 'views/includes/register_process.php';
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
            $register_user_name_error = "Letters, Numbers, - , . , Only allowed".BR;
            $message_warning .= "Letters, Numbers, - , . , Only allowed".BR; 
        }
        if(!preg_match('@.{5,}@', $register_user_name)){
            $register_user_name_error = "Username is to short." .BR;
            $message_warning .= "Username: at least 5 characters".BR; 
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
        }
    }

    // Check the last step before registering a user.
    if($register_user_name_error == '' && $register_email_error == '' && $register_password_error == '' && $register_password_confirm_error == ''){
        $register_successful = true;
        $message_success = 'Every Thing Looks Good!' .BR . 'You have been REGISTERED successfully.' .BR . 'Please Check Your Email to activate your account.';
        //unset($_POST['register_submit_btn']);
        
        // Hashing using BCRYPT
        echo "Hashing using BCRYPT".BR;
        $bcrypt_hash = password_hash($register_password, PASSWORD_BCRYPT, ['cost' => 10]);
        echo $bcrypt_hash;
        $bcrypt_verify = password_verify($register_password, $bcrypt_hash);
        echo BR;
        echo $bcrypt_verify;
    } else {
        echo "There is an error!";
    }
}
?>
<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
        <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page">
        </div>
        <div id="first_line_page">
            <div class="wrapper-login">
                <h2>Register</h2>
                <?php
                    if (!empty($message_warning)) {
                        echo '<div id="form-message-warning" class="message not-success form-message-warning">'
                            . $message_warning . BR .
                            '</div>';
                    }
                    if (!empty($message_success)) {
                        echo '<div id="form-message-success" class="message success form-message-success">'
                            . $message_success .
                            '</div>';
                    }
                ?>
                <form action="register/register" method="POST">
                <!-- <form action="register/register_run" method="POST"> -->
                    <!-- hidden input -->
                    <div class="register-box">
                        <!-- This field is going to be invisible to the user and its value -->
                        <input type="hidden" name=" contact-hidden-field" id="register-hidden-field" value="secret hidden variable" />
                    </div>
                    <!-- Username input -->
                    <div class="register-box">
                        <span class="error-message not-success">
                            <?= $register_user_name_error; ?>
                        </span>
                        <!-- <span class="fas fa-lock"></span> -->
                        <!-- <label class="label" for="register-user-name"><span class="asterisk-required"></span></label> -->
                        <!-- <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i> -->
                        <input type="text" placeholder="Username *" class="input register-input register-user-name" name="register-user-name" id="register-user-name" value="<?php if($register_successful) echo ''; else echo if_isset($register_user_name) ?>"/>
                    </div>
                    <!-- email input -->
                    <div class="register-box">
                        <span class="error-message not-success">
                            <?= $register_email_error; ?>
                        </span>
                        <!-- <i class="fa fa-envelope"></i> -->
                        <!-- <label class="label" for="register-email"><span class="asterisk-required"></span></label> -->
                        <!-- <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i> -->
                        <small></small>
                        <input type="text" placeholder="Email *" class="input register-input register-email" name="register-email" id="register-email" value="<?php if($register_successful) echo ''; else echo if_isset($register_email) ?>" />
                    </div>
                    <!-- password input -->
                    <div class="register-box">
                        <!-- <span class="fas fa-key-skeleton"></span> -->
                        <span class="error-message not-success">
                            <?= $register_password_error; ?>
                        </span>
                        <!-- <span class="fas fa-lock"></span> -->
                        <!-- <span class="fa-solid fa-family"></span> -->
                        <!-- <label class="label" for="register-phone"><span class="asterisk-required"></span></label> -->
                        <!-- <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i> -->
                        <small></small>
                        <input type="password" placeholder="Password *" class="register register-input register-password" name="register-password" id="register-password">
                    </div>
                    <!-- Password confirm input -->
                    <div class="register-box">
                        <!-- <i class="fas fa-key-skeleton"></i> -->
                        <span class="error-message not-success">
                            <?= $register_password_confirm_error; ?>
                        </span>
                        <!-- <span class="fas fa-lock"></span> -->
                        <!-- <label class="label" for="register-phone"><span class="asterisk-required"></span></label> -->
                        <!-- <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i> -->
                        <input type="password" placeholder="Confirm Password *" class="register register-input register-password" name="register-password-confirm" id="register-password-confirm">
                    </div>

                    <button type="submit" class="btn register-submit-btn" name="register-submit-btn" id="register-submit-btn" value="submit">Submit</button>

                    <p class="options">Already have an account? <a href="login">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</div>

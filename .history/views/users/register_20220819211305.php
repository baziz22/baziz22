<?php 
    include_once URLROOT . 'views/includes/register_process.php';
    $dom = new DOMDocument();
//$dom->loadHTML("URLROOT . 'views/pages/users/register.php");
$divs = $dom->getElementsByTagName('div');
foreach ($divs as $div) {
    foreach ($div->attributes as $attr) {
      $name = $attr->nodeName;
      $value = $attr->nodeValue;
      echo "Attribute '$name' :: '$value'<br />";
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
                <form action="register" method="POST">
                <!-- <form action="register/register_run" method="POST"> -->
                    <!-- hidden input -->
                    <div class="register-box">
                        <small></small>
                        <!-- This field is going to be invisible to the user and its value -->
                        <input type="hidden" name=" contact-hidden-field" id="register-hidden-field" value="secret hidden variable" />
                    </div>
                    <!-- Username input -->
                    <div class="register-box">
                        <span class="error-message not-success">
                            <?= $register_user_name_error; ?>
                        </span>
                        <span class="fas fa-lock"></span>
                        <label class="label" for="register-user-name"><span class="asterisk-required"></span></label>
                        <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                        <input type="text" placeholder="Username *" class="input register-input register-user-name" name="register-user-name" id="register-user-name" value="<?php if($register_successful) echo ''; else echo if_isset($register_user_name) ?>"/>
                    </div>
                    <!-- email input -->
                    <div class="register-box">
                        <span class="error-message not-success">
                            <?= $register_email_error; ?>
                        </span>
                        <i class="fa fa-envelope"></i>
                        <label class="label" for="register-email"><span class="asterisk-required"></span></label>
                        <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                        <small></small>
                        <input type="text" placeholder="Email *" class="input register-input register-email" name="register-email" id="register-email" value="<?php if($register_successful) echo ''; else echo if_isset($register_email) ?>" />
                    </div>
                    <!-- password input -->
                    <div class="register-box">
                        <!-- <span class="fas fa-key-skeleton"></span> -->
                        <span class="error-message not-success">
                            <?= $register_password_error; ?>
                        </span>
                        <span class="fas fa-lock"></span>
                        <span class="fa-solid fa-family"></span>
                        <label class="label" for="register-phone"><span class="asterisk-required"></span></label>
                        <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                        <small></small>
                        <input type="password" placeholder="Password *" class="register register-input register-password" name="register-password" id="register-password">
                    </div>
                    <!-- Password confirm input -->
                    <div class="register-box">
                        <!-- <i class="fas fa-key-skeleton"></i> -->
                        <span class="error-message not-success">
                            <?= $register_password_confirm_error; ?>
                        </span>
                        <span class="fas fa-lock"></span>
                        <label class="label" for="register-phone"><span class="asterisk-required"></span></label>
                        <i class="fa-regular fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                        <small></small>
                        <input type="password" placeholder="Confirm Password *" class="register register-input register-password" name="register-password-confirm" id="register-password-confirm">
                    </div>

                    <button type="submit" class="btn register-submit-btn" name="register-submit-btn" id="register-submit-btn" value="submit">Submit</button>

                    <p class="options">Already have an account? <a href="login">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</div>

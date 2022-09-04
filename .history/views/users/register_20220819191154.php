<? php 'include'
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
                <form action="register/register_run" method="POST">

                    
                    <span class="invalidFeedback"></span>
                    <input type="email" placeholder="Email *" value="" name="email">
                    <sup>*</sup>
                    <span class="invalidFeedback"></span>

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
                    <input type="password" placeholder="Password *" name="password">
                    <span class="invalidFeedback"></span>

                    <input type="password" placeholder="Confirm Password *" name="confirmPassword">
                    <span class="invalidFeedback"></span>

                    <button class="btn" type="submit" value="submit">Submit</button>

                    <p class="options">Already have an account? <a href="login">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
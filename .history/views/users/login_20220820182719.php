<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
        <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page">
        </div>
        <div id="first_line_page">
            <?php 
            $errors = [];
            $inputs = [];
            
            if(!empty($_GET['error_message'])) {
                $error_message = $_GET['error_message'];
            }
            
            if(!empty($_GET['login-user-name'])) {
                $uname = $_GET['login-user-name'];
            } else {
                $uname = '';
            }
            ?>
            <div class="wrapper-login">
                <h2>Sign in</h2>
                <form action="login/login_run" method="POST">
                    <!-- Username input -->
                    <span id="invalidFeedback">
                        <?php
                            if (isset($_GET['error_message'])) echo $error_message;
                        ?>
                    </span>
                    <label for="login-user-name"></label>
                    <input type="text" placeholder="Username *" name="login-user-name" class="input register-input register-user-name" value="<?php if (isset($_GET['login-user-name'])) echo $uname; ?>" id="<?php echo isset($errors['login-user-name']) ? 'invalidFeedback' : ''  ?>">
                    <small><?php echo $errors['login-user-name'] ?? '' ?></small>
                    <!-- value="<php echo $inputs['username'] ?? '' ?>" -->
                    <!-- <span id="invalidFeedback"></span> -->
                    
                        <input type="text" placeholder="Username *" name="login-user-name" id="login-user-name" value="<?php if(isset($_GET['login_user_name'])){
                            echo $_GET['login_user_name'];
                        } ?>"/>
                    
                    <!-- Password input -->
                    <label for="password"></label>
                    <input type="password" placeholder="Password *" name="password">
                    <span class="invalidFeedback"></span>

                    <button class="btn login-btn" type="submit" id="sign-in--btn" name="sing-in--btn" value="submit">Sign In</button>

                    <p class="options">Not Register Yet? <a href="register">Create an account!</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="<?php URLROOT; ?>views/form_validation/login_validation.js"></script>
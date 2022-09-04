<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
        <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page">
        </div>
        <div id="first_line_page">
            <div class="wrapper-login">
                <h2>Sign in</h2>
                <form action="login/login_run" method="POST">
                    <label for="username"></label>
                    <input type="text" placeholder="Username *" name="username" id="login-username">
                    <span id="invalidFeedback"></span>

                    <label for="password"></label>
                    <input type="password" placeholder="Password *" name="password">
                    <span class="invalidFeedback"></span>

                    <button class="btn login-btn" type="submit" id="sign--in_btn" value="submit">Sign In</button>

                    <p class="options">Not Register Yet? <a href="register">Create an account!</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="<?php URLROOT; ?>views/form_validation/login_validation.js"></script>
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
                    <input type="text" placeholder="Username *" name="username">
                    <span class="invalidFeedback"></span>
                    <input type="email" placeholder="Email *" value="" name="email">
                    <sup>*</sup>
                    <span class="invalidFeedback"></span>

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
<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
        <?php require 'views/includes/header.php';
        $user_email = "Email "; 
        ?>
        </header>
        <div id="first_line_page">
        </div>
        <div id="first_line_page">
            <div class="wrapper-login">
                <h2>Register</h2>
                <form action="login/register_run" method="POST">
                    <input type="text" placeholder="Username *" name="username">
                    <span class="invalidFeedback">

                    </span>

                    <input type="email" placeholder="Email *" value="<?php echo $user_email. \"\<strong>*</strong>\" ?>" name="email">
                    <span class="invalidFeedback">

                    </span>

                    <input type="password" placeholder="Password *" name="password">
                    <span class="invalidFeedback">

                    <input type="password" placeholder="Confirm Password *" name="confirmPassword">
                    <span class="invalidFeedback">

                    </span>

                    <button class="btn" type="submit" value="submit">Submit</button>

                    <p class="options">Already have an account? <a href="login">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
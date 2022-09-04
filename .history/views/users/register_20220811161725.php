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
                <form action="register/register_run" method="POST">
                    <input type="text" placeholder="Username *" name="user-name">
                    <span class="invalidFeedback">

                    </span>

                    <input type="email" placeholder="Email *" name="user-email">
                    <span class="invalidFeedback">

                    </span>

                    <input type="password" placeholder="Password *" name="user-pwd">
                    <span class="invalidFeedback">

                    <input type="password" placeholder="Confirm Password *" name="confirm-user-pwd">
                    <span class="invalidFeedback">

                    </span>

                    <button class="btn" type="submit" value="submit">Submit</button>

                    <p class="options">Already have an account? <a href="login">Login</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
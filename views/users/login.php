<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
            <?php require 'views/includes/navigation.php';
            ?>
        </header>
        <div id="first_line_page">
        </div>
        <div id="first_line_page">
            <div class="container-login">
                <div class="wrapper-login">
                    <h2>Sign in</h2>
                    <form action="login/login_run" method="POST">
                        <label for="username"></label>
                        <input type="text" placeholder="Username *" name="username">
                        <span class="invalidFeedback">

                            <label for="password"></label>
                        </span>
                        <input type="password" placeholder="Password *" name="password">
                        <span class="invalidFeedback">

                        </span>

                        <button class="btn" type="submit" value="submit">Submit</button>

                        <p class="options">Not Register Yet? <a href="register">Create an account!</a></p>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>
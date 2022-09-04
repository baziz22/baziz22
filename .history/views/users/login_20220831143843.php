<?php 
    // prevent from going back to login page after logging in
    if (isset($_SESSION['status']) && $_SESSION['status'] === "Active") {
        header("location: index");
    }
    if(isset($_GET['message_success'])){
      $message_popup = $_GET['message_success'];
    } else {
      $message_popup = "";
    }
?>
<script src="<?php URLROOT; ?>public/js/popup_message.js"></script>
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
                    
                    <!-- Password input -->
                    <label for="password"></label>
                    <input type="password" placeholder="Password *" name="password">
                    <span class="invalidFeedback"></span>

                    <button class="btn login-btn" type="submit" id="sign-in--btn" name="sing-in--btn" value="submit">Sign In</button>

                    <p class="options">Not Register Yet? <a href="register">Create an account!</a></p>
                    <i id="how-to-activate" class="fas fa-question-circle"></i>
                    div#
                    <?php include 'views/includes/how_to_activate.php'; ?>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="<?php URLROOT; ?>views/form_validation/login_validation.js"></script>
<script>
  /* const myTimeout = setTimeout(myGreeting, 5000); */
  let message_popup = '<?= $message_popup ?>';
  console.log(message_popup);
  if(message_popup === "register-sent"){
    popup_it();
    message_popup = "";
  }
</script>
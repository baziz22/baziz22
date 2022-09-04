<?php
  if(isset($_GET['message_success'])){
    $message_popup = $_GET['message_success'];
  } else {
    $message_popup = "";
  }
  require 'views/includes/popup_message.php';
?>
<div class="main_container">

    <section id="section-one" class="first_page_scroll grid-group">
        <header>
            <?php require 'views/includes/header.php';?>
        </header>
        <!-- <div class="navigation-right-side">
            <span class="nav-aside nav-aside-active"></span>
            <span class="nav-aside"></span>
            <span class="nav-aside"></span>
        </div> -->
        <div class="circle1">
            <?php require 'views/includes/solar_system.php'; ?>
        </div>
        <div id="text-area">
                <div id="type_text">
                    <?php require 'views/includes/type_text.php';?>
                </div>
                <img id="logo-svg" src="public/img/logo.svg" alt="">
        </div>
        <div id="wavy">
            <?php require 'views/includes/wavy.php';?>
        </div>
        <div id="myInfo">
            <img src="" alt="" id="myInfo-img">
        </div>
        <div id="mySkills">
            <?php require 'views/includes/dynamic_txt.php'; ?>
        </div>
        <div id="about-website">
            <i id="info-mark" class="fas fa-info"></i>
            <a href="#section-two"><i id="arrow-slider" class="fas fa-angle-double-down"></i></a>
                <?php include_once 'views/includes/about_website.php'?>
            <i id="popup-chat" class="far fa-comment-alt popup-chat"></i>
        </div>

    </section>
    <section class="first_page_scroll" id="section-two">
        <?php require 'views/includes/my_projects.php';?>
    </section> <!-- End of section class = glass -->
    <section class="" id="section-three">
        <div class="card">
            <!-- <div class="card-info"> -->
            <div class="card-info">
                <h2 class="heading-h2">About :::</h2>
                <p>CCNA is on the way! Smart home and cloud computing are my passion. Designing and developing are my interests.</p>
                <p>More about me in my CV section up there! ➚</p>
                <br>
                <p>If you have any suggestion, feel free to contact me.</p>
            </div>
            
            <!-- </div> -->
            <footer id="footer">
                <?php require 'views/includes/footer.php'; ?>
            </footer>
        </div>
    </section> <!-- End of section three -->

</div> <!-- End of class = main_container -->
<div class="keys-typing-sound">
    <!-- <embed name="GoodEnough" src="./sounds/typing.mp3" loop="false" hidden="true" autostart="true"> -->
    <!-- <audio id="music" preload="all">
                    <source src="./sounds/typing.mp3">
                </audio>
                <script>
                    let music = document.getElementById('music');
                    music.play();
                </script> -->
<div class="preloader-wrapper">
    <span class="preloader"><span class="preloader-inner"></span></span>
</div>
<script src="public/js/popup_message.js"></script>
<script>
    $(window).on("load", function() {
        $(".preloader-wrapper").fadeOut(100, function() {
            // Animation complete.
        });
    });
    const burger = document.getElementsByClassName('nav-toggle-label');
    /* burger.addEventListener('click', nav_action);
    function nav_action() {
        const nav = document.getElementsByName(nav);
        nav.style.backgroundColor = "#f08080";
    } */
    // Scroll to a certain element
    let message_popup = '<?= $message_popup ?>';
    console.log(message_popup);
    if(message_popup === "message-sent"){

    }
</script>

<?php require 'views/includes/end_of_page.php'; ?>

<!-- <div class="circle2">
            <div id="myInfo"></div>
        </div> -->
<div class="main_container">

    <section id="section-one" class="first_page_scroll">
        <header>
            <?php require 'views/includes/navigation.php';
            ?>
        </header>
        <div>
            <!-- <embed name="GoodEnough" src="./sounds/typing.mp3" loop="false" hidden="true" autostart="true"> -->
            <!-- <audio id="music" preload="all">
                    <source src="./sounds/typing.mp3">
                </audio>
                <script>
                    let music = document.getElementById('music');
                    music.play();
                </script> -->
        </div>
        <div id="wavy">
            <?php require 'views/includes/wavy.php';
            ?>
        </div>
        <!-- <div class="navigation-right-side">
            <span class="nav-aside nav-aside-active"></span>
            <span class="nav-aside"></span>
            <span class="nav-aside"></span>
        </div> -->
        <div id="text-area">
            <div id="type_text">
                <?php require 'views/includes/type_text.php';
                ?>
            </div>
            <img id="logo-svg" src="public/img/logo.svg" alt="">
        </div>
        <div id="about-website">
            <?php include_once 'views/includes/about_website.php'
            ?>
        </div>

    </section>
    <section>
        
            <!-- <div id="first_line_page"></div> -->
           

                <?php require 'views/includes/my_projects.php';
                ?>
            </div>

        </main>
    </section> <!-- End of section class = glass -->
    <section class="" id="section-three">


        <div class="card">
            <!-- <div class="card-info"> -->
            <div class="conclusion-card">
                <h2 class="footer-h2">About :::</h2>
                <p>CCNA is on the way! Smart home and cloud computing are my passion. Designing and developing are my interests.</p>
                <p>More about me in my CV section up there! ➚</p>
                <br>
                <p>If you have any suggestion, feel free to contact me.</p>
            </div>
            <!-- </div> -->
            <div id='footer'>
                <?php require 'views/includes/footer.php'; ?>
            </div>
        </div>
    </section> <!-- End of section class = glass -->

</div> <!-- End of class = main_container -->


<div class="circle1">
    <?php require 'views/includes/solar_system.php'; ?>
</div>
<!-- <div class="circle2">
            <div id="myInfo"></div>
        </div> -->
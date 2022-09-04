<script src="<?php URLROOT; ?>public/js/router.js" defer></script>
<div class="main_container">
    <section class="first_page_scroll">
        <header>
            <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page">
        <section class="dashboard-container">
  
            <div class="dashboard-sidebar">
                <div class="logo">
                <p>BB</p>
                </div>
                <div class="btn dashboard-btn active">
                <input type="submit" name='dashboard-welcome'>
                    <!-- <img src="./favicon-32x32.png" alt="" /> -->
                    <span class="material-symbols-outlined"> dashboard </span>
                </input>
                
                </div>
                <div class="btn dashboard-btn">
                    <?php if (Session::get('role') == 'owner') : ?>
                        <input type="submit" value='submit' name='dashboard-user'>
                            <span class="material-symbols-outlined"> monitoring </span>
                        </input>
                    <?php endif; ?>
                </div>
                <div class="btn dashboard-btn">
                <a href="#">
                    <!-- <img src="./favicon-32x32.png" alt="" /> -->
                    <span class="material-symbols-outlined"> person </span>
                </a>
                </div>
                <div class="btn dashboard-btn">
                <a href="#">
                    <span class="material-symbols-outlined"> settings </span>
                </a>
                </div>
            </div>
            <div class="dashboard-main">
                <?php 
                include 'views/includes/dashboard/content.php';
                    if(isset($_GET['dashboard-welcome'])){
                        include URLROOT.'views/users/user';
                    }
                    if(isset($_GET['dashboard-user'])){
                        include 'views/includes/solar_system.php';
                    }
                    
                ?>
            </div>
            <div class="dashboard-profile">
                <div>
                <img class="dashboard-profile-picture" src="<?php URLROOT; ?>public/images/dashboard/memoji-profile-picture.jpeg" alt="" />
                </div>
                <div class="dashboard-profile-full-name">Bader Binsunbil</div>
                <div class="dashboard-profile-last-login">12-Aug-2022</div>
                <div class="dashboard-profile-last-login">progress</div>
            </div>
            <div class="dashboard-footer">
                <span class="material-symbols-outlined"> copyright </span>
                <span> 2022 All rights reserved. Bader Binsunbil </span>
            </div>
            </section> <!-- End of dashboard-container -->
        </div>
    </section>
</div>

    <!-- <section id="section-one" class="first_page_scroll"> -->
        <!-- <div id="first_line_page"></div> -->
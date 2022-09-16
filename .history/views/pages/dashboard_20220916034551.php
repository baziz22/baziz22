<script src="<?php URLROOT; ?>public/js/router.js" defer></script>
<div class="main_container">
  <section class="first_page_scroll">
    <header>
      <?php require 'views/includes/header.php'; ?>
    </header>
    <div id="first_line_page">
      <section class="dashboard-container">

        <div class="dashboard-sidebar">
          <div class="logo">
            <p>BB</p>
          </div>
          <div class="btn dashboard-btn active">
            <a href="<?php URLROOT; ?>dashboard">
              <span class="material-symbols-outlined"> dashboard </span>
            </a>
          </div>
          <div class="btn dashboard-btn">
            <!-- <php if (Session::get('role') == 'owner') : ?> -->
              <a href="user">
                <span class="material-symbols-outlined"> monitoring </span>
              </a>
            <!-- <php endif; ?> -->
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
          <div class="btn dashboard-btn">
            <?php if (Session::get('role') == 'owner') : ?>
              <a href="messages">
                <span class="material-symbols-outlined"> message </span>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="dashboard-main">
          <div class="dashboard-main-top">
            <h2>Progress Dashboard</h2>
          </div>
          <div class="dashboard-main-upper">
            <div class="dashboard-statistics">
              statistics<br>
              <img class="dashboard-statistics-chart" src="<?php URLROOT; ?>public/images/dashboard/line-graph.png" alt="">
            </div>
            <div class="dashboard-extra-statistics">
              More Statistics<br>
              <img class="dashboard-statistics-chart" src="<?php URLROOT; ?>public/images/dashboard/pie-chart.png" alt="">
            </div>
          </div>
          <div class="dashboard-main-lower-middle">
            <h2>Item Management</h2>
            
            <img class="dashboard-main-lower-middle-picture" src="<?php URLROOT; ?>public/images/dashboard/crud_list.png" alt="">

          </div>

          <div class="dashboard-main-bottom">
            <h2> Summary:</h2>
            <p>This is DASHBOARD Login Users Only</p>
            <p>This page is under constructions</p>
          </div>
        </div>
        <div class="dashboard-profile">
          <div>
            <img class="dashboard-profile-picture" src="<?php URLROOT; ?>public/images/dashboard/memoji-profile-picture.jpeg" alt="" />
          </div>
          <div class="dashboard-profile-full-name">
            <?php 
              echo $logged_username;
            ?>
          </div>
          <!-- <div class="dashboard-profile-last-login">12-Aug-2022</div>
          <div class="dashboard-profile-last-login">progress</div> -->
        </div>
        <div class="dashboard-footer">
          <span class="material-symbols-outlined"> copyright </span>
          <span> 2022 All rights reserved. Bader Binsunbil </span>
        </div>
      </section> <!-- End of dashboard-container -->
    </div>
  </section>
</div>
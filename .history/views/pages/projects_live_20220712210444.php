<div class="main_container">
<section class="glass first_page_scroll first_line_page">
    
        <header>
            <?php require 'views/includes/navigation.php';
            ?>
        </header>


<div id="about-website">
            <?php include_once 'views/includes/modal_projects_live.php'
            ?>
        </div>

    <div id="projects-live-container" class="projects-live-container"></div>
<!-- The Modal -->
<div id="project-live-modal" class="project-live-modal">
  <!-- Modal content -->
  <div class="project-live-modal-content">
    <div class="project-live-modal-header">
      <span class="close-modal-btn">&times;</span>
      <h2>Programing languages I used for this website: </h2>
    </div>
    <div class="project-live-modal-body">
      <ul>
        <li>HTML: for instruct the blue print</li>
        <li>CSS: to make it styled</li>
        <li>Vanilla JS: to interact with the website</li>
        <li>PHP: backend security and interact with the DB</li>
        <li>MySQL: backend storing data</li>
        <li>Python: backend analyzing and statistics</li>
        <li>To Do: </li>
        <li>fix the info section</li>
        <li>change the scroll down icon.</li>
        <li>make it responsive.</li>
        <li>do API</li>
        <li>do Lobby</li>
        <li>do Blog</li>
        <li>delete contact</li>

      </ul>
      <p>MVC and OOP for arranging the website</p>
      <p>Note: This website is still in development process!</p>
    </div>
    <div class="project-live-modal-footer">
      <h3>More info Click Me!.</h3>
    </div>
  </div>

</div>
</section>
</div>
<script src="<?php URLROOT; ?>public/js/projects_live.js"></script>
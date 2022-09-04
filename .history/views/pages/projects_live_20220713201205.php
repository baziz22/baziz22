<div class="main_container glass first_page_scroll" >
    
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
      <?php include '<?php URLROOT; ?>views/includes/' ?>
    </div>
    <div class="project-live-modal-footer">
      <h3>More info Click Me!.</h3>
    </div>
  </div>

</div>
</div>
<script src="<?php URLROOT; ?>public/js/projects_live.js"></script>
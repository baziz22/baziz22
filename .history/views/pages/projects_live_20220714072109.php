<style>
  .svg-container {
    display: inline-block;
    position: relative;
    width: 80%;
    padding-bottom: 100%;
    vertical-align: top;
    overflow: hidden;
}
.svg-content {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
}
.update-barchart {
  position: relative;
  top: 10%;
  left: 10%;
  align-items: center;
}
</style>
<div class="main_container glass first_page_scroll">
  <header><?php require 'views/includes/navigation.php';?></header>
  
  <div id="projects-live-container" class="projects-live-container"></div>
  
  <!-- The Modal -->
  <div id="project-live-modal" class="project-live-modal">
    <!-- Modal content -->
    <div class="project-live-modal-content">
      <div class="project-live-modal-header">
        <span class="close-modal-btn">&times;</span>
        <h2>Bar Chart Project Using D3.js</h2>
      </div>
      <div class="project-live-modal-body svg-container">
        <script type="text/javascript" src="<?php URLROOT; ?>views/includes/project_live/bar_chart/js/barchart_scale_axis.js"></script>
      </div>
      <div class="project-live-modal-footer">
      <div class="update-barchart">
          <button class="btn">Make Your Own Chart</button>
          <p>Comming Soon!</p>
        </div>
        <h3>Bader Binsunbil <a href="bbins.me">bbins.me</a></h3>
      </div>
    </div>

  </div>
</div>
<script src="<?php URLROOT; ?>public/js/projects_live.js"></script>
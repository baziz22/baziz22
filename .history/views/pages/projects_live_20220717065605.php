<style>
  .svg-container {
    position: relative;
    width: 100%;
    height: 100%;
    /* vertical-align: top; */
    overflow: auto;
  }

  .svg-content {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .update-barchart {
    text-align: center;
  }

  .scrollable {
    overflow-y: scroll;
  }

  .disable-scroll {
    overflow-y: hidden;
  }

  .show-project {

    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    height: 100%;
  }
  .hide-project {
    display: none
  }
</style>
<div class="main_container glass first_page_scroll">
  <header><?php require 'views/includes/navigation.php'; ?></header>

  <div id="projects-live-container" class="projects-live-container"></div>

  <!-- The Modal -->
  <div id="project-live-modal" class="project-live-modal">
    <!-- Modal content -->
    <div class="project-live-modal-content">
      <div class="project-live-modal-header">
        <span class="close-modal-btn">&times;</span>
        <h2>Bar Chart Project Using D3.js</h2>
      </div>

        <!-- Bar Project -->
        <div class=  id="project-bar-chart">
          <p>Bar Chart</p>
        </div>

        <div id="project-pie-chart">
          <p>Pie Chart</p>
        </div>

        <div id="project-canvas-drawing">
          <p>Canvas Drawing</p>
        </div>

      <div class="project-live-modal-footer">

        <h3>Bader Binsunbil <a href="bbins.me">bbins.me</a></h3>
      </div>
    </div>

  </div>
</div>
<script src="<?php URLROOT; ?>public/js/projects_live.js"></script>
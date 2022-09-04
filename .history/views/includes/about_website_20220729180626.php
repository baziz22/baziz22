<?php
//include_once 'modal_header.php';
?>

<style>
  /* The Modal (background) */
  .about-website-modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 3;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    bottom: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
    border: 1px solid black;
  }

  /* Modal Content */
  .about-website-modal-content {
    font-family: Tox, 'Courier New', Courier, monospace;
    position: absolute;
    /* background-color: rgba(0, 136, 169, 0.8); */
    background: linear-gradient(to top left, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.9));
    /* margin: auto; */
    /* padding: 0; */
    bottom: 0;
    left: 0;
    border: 1px solid #888;
    border-radius: 10px;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;

  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {
      left: -500px;
      opacity: 0
    }

    to {
      left: 0;
      opacity: 1
    }
  }

  @keyframes animatetop {
    from {
      left: -500px;
      opacity: 0
    }

    to {
      left: 0;
      opacity: 1
    }
  }

  /* The Close Button */
  .close-modal-btn {
    color: #BB004B;
    float: right;
    font-size: 36px;
    font-weight: bold;
  }

  .close-modal-btn:hover,
  .close-modal-btn:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .about-website-modal-header {
    background-color: rgba(0, 136, 169, 1);
    color: blanchedalmond;
    font-size: 19px;
    padding: 2px 16px;
  }

  .about-website-modal-body {
    padding: 2px 16px;
  }

  .about-website-modal-footer {
    padding: 2px 16px;
    background-color: rgba(0, 136, 169, 1);
    color: blanchedalmond;
    font-size: 19px;
  }
</style>
<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> -->
<!-- <button id='about-website-btn'><i class="fas fa-question-circle"></i></button> -->

<!-- The Modal -->
<div id="about-website-modal" class="about-website-modal">
  <!-- Modal content -->
  <div class="about-website-modal-content">
    <div class="about-website-modal-header">
      <span class="close-modal-btn">&times;</span>
      <h2>Programing languages I used for this website: </h2>
    </div>
    <div class="about-website-modal-body">
      <ul>
        <li>HTML: for instructing the blue print</li>
        <li>CSS: to make it styled</li>
        <li>Vanilla JS: to interact with the website</li>
        <li>PHP: backend security and interact with the DB</li>
        <li>MySQL: backend storing data</li>
        <li>D3.js: for data analysis and visualizations</li>
        <li>To Do: </li>
        <li>fix the info section</li>
        <li>change the scroll down icon.</li>
        <li>make it responsive.</li>
        <li>do API</li>
        <li>do Lobby</li>
        <li>do Blog</li>
        <li>Version 2 is gonna have much better styling and mor</li>
        <li>delete contact</li>

      </ul>
      <p>MVC and OOP for arranging the website files and folders</p>
      <p>Note: This website is still in development process!</p>
    </div>
    <div class="about-website-modal-footer">
      <h3>More info Click Me!.</h3>
    </div>
  </div>

</div>

<script>
  // Get the modal
  var modal = document.getElementById("about-website-modal");

  // Get the button that opens the modal
  var btn = document.getElementById("info-mark");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-modal-btn")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
<?php
//include_once 'modal_footer.php';
?>
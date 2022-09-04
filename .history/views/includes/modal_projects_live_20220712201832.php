<style>
  
</style>
<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> -->
<!-- <button id='about-website-btn'><i class="fas fa-question-circle"></i></button> -->
<i id="question-mark" class="fas fa-question-circle"></i>


<script>
  // Get the modal
  var modal = document.getElementById("project-live-modal");

  // Get the button that opens the modal
  var btn = document.getElementById("expanding-cards");

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
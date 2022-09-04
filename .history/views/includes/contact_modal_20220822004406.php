<style>
  #contact-google-map {
    width: 100%;
    height: 300px;
  }

  @media (max-width: 767.98px) {
    #contact-google-map {
      height: 300px;
    }
  }

  #contactForm .error {
    color: red;
    font-size: 12px;
  }

  #contactForm {
    font-size: 16px;
  }

  #message {
    resize: vertical;
  }

  #form-message-warning,
  #form-message-success {
    display: none;
  }

  #form-message-warning {
    color: red;
  }

  #form-message-success {
    color: #28a745;
    font-size: 18px;
    font-weight: 500;
  }

  .submitting {
    float: left;
    width: 100%;
    padding: 10px 0;
    display: none;
    font-size: 16px;
    font-weight: 500;
    color: #2553b8;
  }
</style>
<div id="my-modal" class="contact-modal">
  <div class="contact-modal-content">
    <div class="contact-modal-header">
      <span class="contact-modal-close">&times;</span>
      <h2 class="header-title">Contact :::</h2>
    </div>

    <div class="contact-modal-body">

    <div class="form-group">
    
      <div class="" 
      <div id="form-message-warning"></div>
      <div id="form-message-success">
        Your message was sent, thank you!
      </div>

      <form action="<?php URLROOT; ?>views/includes/sendEmail.php" 
      id="contact-form" name="contact-form" class="contact-form" method="POST" enctype="text/plain">

        <div class="contact-box">
          <span class="fa fa-user"></span>
          <label class="label" for="contact-full-name">Full Name <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <input type="text" class="contact-input contact-full-name"" name=" contact-full-name" id="contact-full-name" />
          
        </div>
        <div class="contact-box">
          <span class="fa fa-envelope"></span>
          <label class="label" for="contact-name">Email <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <input type="text" class="contact-input contact-email" name="contact-email" id="contact-email">
        </div>

        <div class="contact-box">
          <span class="fa fa-pencil"></span>
          <label class="label" for="-contact-subject">Subject <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <input type="text" class="contact-input contact-subject" name="contact-subject" id="contact-subject" >
        </div>
        
        <div class="contact-box">
          <span class="fa fa-comment"></span>
          <label class="label" for="-contact-subject">Message <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <textarea class="contact-input contact-text-area" name="contact-message" cols="40" rows="4" id="contact-message" ></textarea>
        </div>
        
        <button class="btn contact-submit-btn" type="submit" name="submit">Send</button>
      </form>
    
    </div> <!-- Eng of form-group -->
    <div class="contact-map">
      <div id="contact-google-map"></div>
      </div>
    </div>

    <div class="contact-modal-footer">
      <span class="fa fa-map-marker"></span>
      <span class="fa fa-phone"></span>
      <span class="fa fa-paper-plane"></span>
      <span class="fa fa-globe"></span>
    </div>

  </div>
</div>
<script>
  function initMap() {
  // The location of Uluru
  const slc = { lat: 40.758701, lng: 	-111.876183 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("contact-google-map"), {
    zoom: 14,
    center: slc,
  });
  }
window.initMap = initMap;
</script>
<script src="<?php URLROOT; ?>public/js/contact-validation.js"></script>
<!-- <script src="<?php URLROOT; ?>public/js/google-map.js"></script> -->
<!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA58cpebsF-hTOYGQnYfyoJrZ_RSEL32o0&callback=initMap&v=weekly"
      defer
    ></script>
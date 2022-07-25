
<style>
  #contact-google-map {
    width: 100%;
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
    
      <div id="form-message-warning"></div>
      <div id="form-message-success">
        Your message was sent, thank you!
      </div>

      <form id="contactForm" name="contactForm" class="contactForm" method="POST" enctype="text/plain">

        <div class="contact-label">
          <span class="fa fa-user"></span>
          <label class="label" for="contact-name">Full Name</label>
          <input type="text" class="contact-input contact-email"" name=" contact-name" id="contact-name" />
        </div>
        <div class="contact-label">
          <span class="fa fa-envelope"></span>
          <label class="label" for="contact-name">Email *</label>

        </div>
        <input type="email" class="contact-input contact-email" name="contact-email" id="contact-email" required>

        <div class="contact-label">
          <span class="fa fa-pencil"></span>
          <label class="label" for="-contact-subject">Subject *</label>
        </div>
        <input type="text" class="contact-input contact-subject" name="contact-subject" id="subject" required>


        <div class="contact-label">
          <span class="fa fa-comment"></span>
          Message *
        </div>
        <textarea class="contact-input contact-text-area" name="contact-message" cols="40" rows="4" id="contact-message" required></textarea>

        <button class="btn contact-submit-btn" type="submit">Send</button>
      </form>
    
    </div>
    <div class="map-section">
      <div id="contact-google-map"></div>
      </div>
    </div>

    <div class="contact-modal-footer">
      <span class="fa fa-map-marker"></span>
      <span class="fa fa-phone"></span>
      <span class="fa fa-paper-plane"></span>
      <span class="fa fa-globe"></span>
      <span class="fa fa-user"></span>
      <span class="fa fa-mobile-phone"></span>
      <span class="fa fa-info"></span>

    </div>

  </div>
</div>

<script src="<?php URLROOT; ?>public/js/contact-submission.js"></script>
<script src="<?php URLROOT; ?>public/js/popper.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php URLROOT; ?>public/js/google-map.js"></script>
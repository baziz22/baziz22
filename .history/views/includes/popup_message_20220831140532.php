<div class="popup-modal">
  <div class="popup-window">
    <img src="public/images/404-tick.png" alt="">
    <div class="popup-header">
      <h3>Thank You</h3>
      <i class="fa fa-times" aria-hidden="true" id="popup-close"></i>
    </div>
    <?php 
      if(isset($_GET['message_success'])){
        
        $message_popup = $_GET['message_success'];
        if($message_popup === "message_sent"): ?>
          <p>Message has been sent</p>
          <p>I will get back to you as soon as possible</p>
        <?php elseif($message_popup === "register_sent"): ?>
          <p>for registering</p>
          <p>It is important to activate your account.</p>
          <p>click the question mark '?' to see how</p>
        <?php endif;
    ?>
    
    
    <button class="submit">Ok</button>
  </div>
</div>
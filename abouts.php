<?php require_once ("connection.php"); ?>
<?php include 'theme/header.php';
include 'theme/sidebar.php';
?>
<!-- Contact Section -->
<div id="contact-section">
  <body style="background-color: pink">
  <div class="container">
    <div class="section-title center">
    <h3>  <marquee behavior="alternate"><h2>ABOUT US</h2></marquee></h3>
    <p>verry good</p>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-4">
      <h3>Contact Page</h3>
      <div class="space"></div>
      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>HIMAMAYLAN CITY<br>
       Himamaylan ,Negros,Occidental</p>
      <div class="space"></div>
      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>nikocuraza@gmail.com</p>
      <div class="space"></div>
      <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>09071150668</p>
    </div>
    <div class="col-md-8">
      <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
		
      </form>
    </div>
  </div>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
    
    </div>
  </div>
</div>
</div>
<?php include 'theme/stickyfooter.php';?>
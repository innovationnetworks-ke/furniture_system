<?php require_once ("connection.php"); ?>
<?php include 'theme/header.php';
include 'theme/sidebar.php';
?>
<!-- Contact Section -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image" styles="width:20%;height:20%" >
                <img style="width:20%;height:20%" src="https://previews.123rf.com/images/kppwc/kppwc1905/kppwc190500151/125231437-chat-message-icon-speech-bubble-icon-vector.jpg" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>LEAVE US A MESSAGE</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
    
    </div>
  </div>
</div>
</div>
<?php include 'theme/stickyfooter.php';?>
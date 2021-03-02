<?php
session_start();
 ?>


<?php
require_once 'header.php'; 
?>

<!-- Contact Section -->
<div id="soical">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
         
          <?php
          if(!empty($_SESSION['success'])){
           ?>
          <div class="alert alert-danger" role="alert">
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
          </div>
          <?php } ?>
        </div>
        <form action="socal_post.php" method="post" id="contactForm" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="link" id="link" name="link" class="form-control" placeholder="link here" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <input type="file" name="icon" class="form-control">
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Submit </button>
        </form>
      </div>
    </div>
    
      </div>
      </div>

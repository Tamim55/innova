<?php
session_start();
?>
<?php
require 'db.php';
$select_logo = "SELECT * FROM logo WHERE status=1";
$logo_result = mysqli_query($db_connection,$select_logo);
$after_assoc = mysqli_fetch_assoc($logo_result);
?>

<?php
$select = "SELECT * FROM  service";
$result = mysqli_query($db_connection, $select);
?>


<?php
$select2 = "SELECT * FROM  test";
$result2 = mysqli_query($db_connection, $select2);
 ?>

<?php
require 'db.php';
$select3 = "SELECT * FROM  about";
$result3 = mysqli_query($db_connection, $select3);
 ?>

<?php
require 'db.php';
$select4 = "SELECT * FROM  contact";
$result4 = mysqli_query($db_connection, $select4);
 ?>



<?php
require 'db.php';
$select5 = "SELECT * FROM  green";
$result5 = mysqli_query($db_connection, $select5);
 ?>

<?php
require 'db.php';
$select6 = "SELECT * FROM  copyright";
$result6 = mysqli_query($db_connection, $select6);
 ?>


<?php
require 'db.php';
$select7 = "SELECT * FROM  free_cost";
$result7 = mysqli_query($db_connection, $select7);
 ?>

<?php
require 'db.php';
$select8 = "SELECT * FROM  call_tbl";
$result8 = mysqli_query($db_connection, $select8);
 ?>

<?php
require 'db.php';
$select9 = "SELECT * FROM  tope_head";
$result9 = mysqli_query($db_connection, $select9);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INNOVA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
      <?php

        foreach ($result8 as $value8) {
       ?> 
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">
        
        
        <img src="uploads/logo/<?php  echo $after_assoc["logo"];?>" alt="" width="100">
         
        </a>
        
        
      <div class="phone"><span><?php echo $value8['head']; ?></span><?php echo $value8['para']; ?></div>
    </div>
      
      <?php
        }
       ?>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
      
     <?php

        foreach ($result9 as $value9) {
       ?> 

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $value9['about']; ?>" class="page-scroll"><?php echo $value9['about_head']; ?></a></li>
        <li><a href="<?php echo $value9['services']; ?>" class="page-scroll"><?php echo $value9['services_head']; ?></a></li>
       <li><a href="<?php echo $value9['testimonials']; ?>" class="page-scroll"><?php echo $value9['testimonials_head']; ?></a></li>
  <li><a href="<?php echo $value9['contact']; ?>" class="page-scroll"><?php echo $value9['contact_head']; ?></a></li>
      </ul>
    </div>
<?php
        }
       ?>      
      
      
    <!-- /.navbar-collapse -->
  </div>
</nav>
    
    
    
  
    
<!-- Header -->
 <?php

        foreach ($result5 as $value5) {
       ?>      
    
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?php echo $value5['green_head']; ?></h1>
          <h3> <p><?php echo $value5['parag1']; ?></p></h3>
            <a href="http://<?php echo $value5['parag2']; ?>" class="btn btn-warning btn-lg page-scroll">tamim More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
    
 <?php
        }
       ?>   
    
    
    
    
    
    
<!-- Get Touch Section -->
    
     <?php

        foreach ($result7 as $value7) {
       ?> 
    
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3><?php echo $value7['free_head']; ?></h3>
        <p><?php echo $value7['parag']; ?></p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div>
    
    <?php
        }
       ?>  
    
    
<!-- About Section -->
 <?php

        foreach ($result3 as $value3) {
       ?>    
    
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="uploads/about/<?php echo $value3['image']; ?>" class="image-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?php echo $value3['header']; ?></h2>
          <p><?php echo $value3['para1']; ?></p>
          <h3><?php echo $value3['choose']; ?></h3>
          <div class="list-style">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <ul>
                <li><?php echo $value3['point1']; ?></li>
                <li><?php echo $value3['point2']; ?></li>
                <li><?php echo $value3['point3']; ?></li>
                <li><?php echo $value3['point4']; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
     <?php
        }
       ?>
    

<!-- Services Section -->
    
    
 <div id="services">
  <div class="container">
    <div class="section-title">
      <h2> Services </h2>
    </div>
    <div class="row">
      <?php

        foreach ($result as $value) {
       ?>
      <div class="col-md-4">
        <div class="service-media"> <img src="uploads/service/<?php echo $value['service_img'] ?>" alt=" "> </div>
        <div class="service-desc">
          <h3><?php echo $value['service_title']; ?></h3>
          <p><?php echo $value['service_des'] ?></p>
        </div>
      </div>
      <?php
        }
       ?>
    </div>

  </div>
</div>   
    
    
    
   
    
    
    
    
    
    
<!-- Testimonials Section -->
    
    
    
    
    <div id="testimonials">
      
  <div class="container">
    <div class="section-title">
    <h1>Testimonials<h1>
      <h2><?php //echo $navdata['three']; ?></h2>
    </div>
    <div class="row">
      <?php
          foreach ($result2 as  $value2) {
       ?>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="uploads/test/<?php echo $value2['test_img']; ?>" alt=""> </div>
          <div class="testimonial-content">
            <p><?php echo $value2['test_title']; ?></p>
            <div class="testimonial-meta"><?php echo $value2['test_des']; ?></div>
          </div>
        </div>
      </div>
<?php } ?>
    </div>
  </div>
</div>
    
    
    
    
    
    
    

    
    
    
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
            
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
        <form action="message_post.php" method="post" id="contactForm" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" name="fname" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
            
          <div class="form-group">
            <input type="file" name="photo" class="form-control">
          </div>
            
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
      
      
      
      
      
 <?php

        foreach ($result4 as $value4) {
       ?>         
      
      
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4><?php echo $value4['contact_head']; ?></h4>
        <p><span><?php echo $value4['address_head']; ?></span> <?php echo $value4['address']; ?>  </p>
      </div>
      <div class="contact-item">
        <p><span><?php echo $value4['phone_head']; ?></span> <?php echo $value4['phone']; ?></p>
      </div>
      <div class="contact-item">
        <p><span><?php echo $value4['email_head']; ?></span> <?php echo $value4['email']; ?></p>
      </div>
    </div>
      
      
 <?php
        }
       ?>     
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    <div class="col-md-12">
      <div class="row">
        <div class="social" style="color:white">
          <ul>
<!--
             <?php
              
              $select_query = "SELECT * FROM social";
            $return_db = mysqli_query($db_connection,$select_query);
              foreach ($return_db as $data)
              
              ?>
              
              
              
            
              <img src="uploads/<?php  echo $after_assoc["logo"];?>" alt="" width="100">
              
              <img src="uploads/<?php  echo $after_assoc["logo"];?>" alt="" width="100">
              
-->

              
              
            <li><a href="https://www.facebook.com" target="_blank"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            
            <li><a href="https://www.youtube.com/"  target="_blank" ><i class="fa fa-youtube"></i></a></li>
              
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
             <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
              
              
              
          </ul>
            

            
        </div>
      </div>
    </div>
  </div>
</div>
      
      
      
<!-- Footer Section -->
      
<?php

        foreach ($result6 as $value6) {
       ?>         
      
<div id="footer">
  <div class="container text-center">
    <p>&copy; <?php echo $value6['copy_right']; echo "  ";?><a href="http://<?php echo $value6['url']; ?>" ><?php echo $value6['url_front']; ?></a></p>
  </div>
</div>
 
      <?php
        }
       ?>   
      
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

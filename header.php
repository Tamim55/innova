<?php
require 'session_check.php';
require 'db.php';
?>     
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="deshboard_assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<link href="deshboard_assets/css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
       
        
        <?php
        $after_explode = explode('/',$_SERVER['PHP_SELF']);
        $current_page =end($after_explode);
        //int_r($_SERVER['PHP_SELF']);
        echo  $current_page;
        ?>
        
        
        
		<div class="profile-sidebar">
			<div class="profile-userpic">
                
				<img src="uploads/user_photo/<?php echo $_SESSION['photo'];?>" class="img-responsive" alt="">
			</div>
            
			<div class="profile-usertitle"> 
				<div class="profile-usertitle-name"><?php echo $_SESSION['name']; ?></div>
				<div class="profile-usertitle-status"><?php echo $_SESSION['email']; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
                 <li class="<?php echo ($current_page == "desh.php")? 'active' : '' ?>"><a href="desh.php"><i class="fas fa-tachometer-alt"></i>Dashboard </a></li>
            
                <li class="<?php echo ($current_page == "tope.php")? 'active' : '' ?>"><a href="tope.php"><i class="fas fa-tape"></i>Tope Head</a></li>

                <li class="<?php echo ($current_page == "call.php")? 'active' : '' ?>"><a href="call.php"><i class="fas fa-phone-volume"></i>Call Head</a></li>
            
            <li class="<?php echo ($current_page == "green.php")? 'active' : '' ?>"><a href="green.php"><i class="fas fa-book-reader"></i>Green Head</a></li>
    
			<li class="<?php echo ($current_page == "register.php")? 'active' : '' ?>"><a href="register.php"><i class="fas fa-users"></i>Add User</a></li>
    
			<li class="<?php echo ($current_page == "message_view.php")? 'active' : '' ?>" ><a href="message_view.php"><i class="fas fa-sms"></i>&nbsp;All Messages</a></li>
    
			<li class="<?php echo ($current_page == "logo_view.php")? 'active' : '' ?>" ><a href="logo_view.php"><em class="fa fa-toggle-off">&nbsp;</em> LOGO</a></li>
    
            <li class="<?php echo ($current_page == "free.php")? 'active' : '' ?>" ><a href="free.php"><em class="fas fa-user-ninja">&nbsp;</em> Free Cost </a></li>
             
             <li class="<?php echo ($current_page == "about.php")? 'active' : '' ?>" ><a href="about.php"><em class="fas fa-eject">&nbsp;</em> ABOUT</a></li>
     <li class="<?php echo ($current_page == "contact.php")? 'active' : '' ?>" ><a href="contact.php"><em class="fas fa-address-card">&nbsp;</em> Contact</a></li>
    
			<li class="<?php echo ($current_page == "service.php")? 'active' : '' ?>" ><a href="service.php"><em class="fas fa-cogs">&nbsp;</em> Service</a></li>
    
           
			<li class="<?php echo ($current_page == "test.php")? 'active' : '' ?> "><a href="test.php"><em class="fas fa-envelope-open-text">&nbsp;</em>
                Testimonials </a>
            <li class="<?php echo ($current_page == "copy_view.php")? 'active' : '' ?>" ><a href="copy_view.php"><em class="fas fa-eject">&nbsp;</em> Copyright</a></li>    
                
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-md-12">
				 


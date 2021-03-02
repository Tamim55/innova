<?php
require_once 'header.php';
 ?>
<?php
//require 'session_check.php';
require 'db.php';

$user_id = $_GET['id'];
$select_query = "SELECT * FROM about WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$header = $after_assoc['header'];
$para1 = $after_assoc['para1'];
$choose = $after_assoc['choose'];
$point1 = $after_assoc['point1'];

$point2 = $after_assoc['point2'];
$point3 = $after_assoc['point3'];
$point4 = $after_assoc['point4'];
$image = $after_assoc['image'];


?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>About Edit</h2>
    </div>
    <form action="about_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        

          <div class="col-lg-12 form-group">
        <label for="">Head</label>
          <input type="text" class="form-control" name="header" value="<?php echo $header; ?>">
      </div> 
         <div class="col-lg-12 form-group">
        <label for="">Paragraph</label>
          <input type="text" class="form-control" name="para1" value="<?php echo $para1; ?>">
      </div>
        
        
          <div class="col-lg-12 form-group">
        <label for="">Choose</label>
          <input type="text" class="form-control" name="choose" value="<?php echo $choose; ?>">
      </div> 
         <div class="col-lg-12 form-group">
        <label for="">Point one</label>
          <input type="text" class="form-control" name="point1" value="<?php echo $point1; ?>">
      </div>
        
        
        
        
        <div class="col-lg-12 form-group">
        <label for="">Point Two</label>
          <input type="text" class="form-control" name="point2" value="<?php echo $point2; ?>">
      </div> 
         <div class="col-lg-12 form-group">
        <label for="">Point Three</label>
          <input type="text" class="form-control" name="point3" value="<?php echo $point3; ?>">
      </div>
        
        
          <div class="col-lg-12 form-group">
        <label for="">Point Four</label>
          <input type="text" class="form-control" name="point4" value="<?php echo $point4; ?>">
      </div> 
        
<!--
         <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" class="form-control" name="image" value="<?php echo $image; ?>">
      </div>
-->
        
        <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="image">
          <br>
          <br>
          <img src="uploads/about/<?php echo $image; ?>" alt="">
      </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
      <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>

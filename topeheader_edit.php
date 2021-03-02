<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM tope_head WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$about_head = $after_assoc['about_head'];
$about = $after_assoc['about'];
$services_head = $after_assoc['services_head'];
$services = $after_assoc['services'];
$testimonials_head = $after_assoc['testimonials_head'];
$testimonials = $after_assoc['testimonials'];
$contact_head = $after_assoc['contact_head'];
$contact = $after_assoc['contact'];

?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Header</h2>
    </div>
    <form action="contact_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
<!--
        
      <div class="col-lg-12 form-group">
        <label for="">title</label>
          <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>">
          <input type="text" class="form-control" name="fname" value="<?php echo $name; ?>">
      </div>
-->
        
      <div class="col-lg-12 form-group">
        <label for="">About Head</label>
          <input type="text" class="form-control" name="about_head" value="<?php echo $about_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">About URL</label>
          <input type="text" class="form-control" name="about" value="<?php echo $about; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Services Head</label>
          <input type="text" class="form-control" name="services_head" value="<?php echo $services_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Services URL</label>
          <input type="text" class="form-control" name="services" value="<?php echo $services; ?>">
      </div>
        
        
              
      <div class="col-lg-12 form-group">
        <label for="">Testimonials Head</label>
          <input type="text" class="form-control" name="testimonials_head" value="<?php echo $testimonials_head; ?>">
      </div>
        
        
        
          
      <div class="col-lg-12 form-group">
        <label for="">Testimonials URL</label>
          <input type="text" class="form-control" name="testimonials" value="<?php echo $testimonials; ?>">
      </div>
          
      
          
      <div class="col-lg-12 form-group">
        <label for="">Contact Head</label>
          <input type="text" class="form-control" name="contact_head" value="<?php echo $contact_head; ?>">
      </div>
                  
      <div class="col-lg-12 form-group">
        <label for="">Contact URL</label>
          <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
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

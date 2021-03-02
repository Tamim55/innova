<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM contact WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$contact_head = $after_assoc['contact_head'];
$address_head = $after_assoc['address_head'];
$address = $after_assoc['address'];
$phone_head = $after_assoc['phone_head'];
$phone = $after_assoc['phone'];
$email_head= $after_assoc['email_head'];
$email = $after_assoc['email'];

?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit contact</h2>
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
        <label for="">Contract Head</label>
          <input type="text" class="form-control" name="contact_head" value="<?php echo $contact_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Address Head</label>
          <input type="text" class="form-control" name="address_head" value="<?php echo $address_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Address</label>
          <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Phone Head</label>
          <input type="text" class="form-control" name="phone_head" value="<?php echo $phone_head; ?>">
      </div>
        
        
              
      <div class="col-lg-12 form-group">
        <label for="">Phone</label>
          <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
      </div>
        
        
        
          
      <div class="col-lg-12 form-group">
        <label for="">Email Head</label>
          <input type="text" class="form-control" name="email_head" value="<?php echo $email_head; ?>">
      </div>
          
      
          
      <div class="col-lg-12 form-group">
        <label for="">Email</label>
          <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
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

<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM free_cost WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$free_head = $after_assoc['free_head'];
$parag = $after_assoc['parag'];

?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2> Free Edit</h2>
    </div>
    <form action="free_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
<!--
        
      <div class="col-lg-12 form-group">
        <label for="">title</label>
          <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>">
          <input type="text" class="form-control" name="fname" value="<?php echo $name; ?>">
      </div>
-->
        
      <div class="col-lg-12 form-group">
        <label for="">Free Head</label>
          <input type="text" class="form-control" name="free_head" value="<?php echo $free_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Address Head</label>
          <input type="text" class="form-control" name="parag" value="<?php echo $parag; ?>">
      </div>
          
      
       
   

      <div class="col-lg-12 text-center">
        <button type="submit" name="btn-update" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>

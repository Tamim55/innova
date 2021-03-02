<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM green WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$green_head = $after_assoc['green_head'];
$parag1 = $after_assoc['parag1'];
$parag2 = $after_assoc['parag2'];

?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2> Green Edit</h2>
    </div>
    <form action="green_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        

        
      <div class="col-lg-12 form-group">
        <label for="">green Head</label>
          <input type="text" class="form-control" name="green_head" value="<?php echo $green_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">green1 Head</label>
          <input type="text" class="form-control" name="parag11" value="<?php echo $parag1; ?>">
      </div>
          <div class="col-lg-12 form-group">
        <label for="">green1 Head</label>
          <input type="text" class="form-control" name="parag22" value="<?php echo $parag2; ?>">
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

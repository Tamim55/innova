<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM call_tbl WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$call_head = $after_assoc['head'];
$parag = $after_assoc['para'];
?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Call Edit</h2>
    </div>
    <form action="call_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">Call Head</label>
          <input type="text" class="form-control" name="call_head" value="<?php echo $call_head; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Paragraph</label>
          <input type="text" class="form-control" name="parag" value="<?php echo $parag; ?>">
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
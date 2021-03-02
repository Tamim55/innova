<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';

$user_id = $_GET['id'];
$select_query = "SELECT * FROM test WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$name = $after_assoc['test_title'];
$email = $after_assoc['test_des'];
//$message = $after_assoc['service_img'];
$photo = $after_assoc['test_img'];

?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit test</h2>
    </div>
    <form action="test_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">title</label>
          <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>">
          <input type="text" class="form-control" name="fname" value="<?php echo $name; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Des</label>
          <input type="text" class="form-control" name="desc" value="<?php echo $email; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="photo">
          <br>
          <br>
          <img src="uploads/test/<?php echo $photo; ?>" alt="">
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

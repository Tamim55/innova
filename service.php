<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM  service";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>All Services</h2>
  </div>
  <div class="col-lg-12">
    <a href="add_service.php"> <button type="button" class="btn btn-primary">Add Service</button> </a>
  </div>

    <?php
    include 'all_service.php';
    
    ?>
    
</div>

 <?php
 require_once 'footer.php';
  ?>

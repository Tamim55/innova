<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM  test";
$result = mysqli_query($db_connection, $select);

 ?>





<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>All Testimonials</h2>
  </div>
  <div class="col-lg-12">
    <a href="add_test.php"> <button type="button" class="btn btn-primary">Add Testimonials</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
          <td>ID</td>
          <td>Test IMAGE</td>
          <td>Test TITLE</td>
          <td>Test DESCRIPTION</td>
             <th>ACTION</th>
        </tr>

        <?php
        foreach ($result as $value) {
         ?>
        <tr>
          <td><?php echo $value['id']; ?></td>
          <td> <img src="uploads/test/<?php echo $value['test_img']; ?>" alt=""width="100"> </td>
          <td><?php echo $value['test_title']; ?></td>
          <td><?php echo $value['test_des']; ?></td>
            <td>
              
              <a href="test_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a>
              <a href="test_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a>

            </td>
            
        </tr>
        <?php   } ?>
      </table>
  </div>
</div>

 <?php
 require_once 'footer.php';
  ?>
<script>

    $(function(){
      $('#search_btn').click(function(){
        var search_data = $('#search_data').val();
        var base_url = window.location.pathname;
        var search_url = base_url+'?search='+search_data ;
        window.location.href = search_url;
      });

      $('#table_id').DataTable();
    });

    </script>

<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM green ";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>All Green</h2>
  </div>
  <div class="col-lg-12">
    <a href="green_add.php"> <button type="button" class="btn btn-primary">Add Free</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
          <td>Green Header</td>
            <td>Paragraph One</td>
             <td>Paragraph  Two</td>
            <th>Action</th>
        </tr>

        <?php
        foreach ($result as $value) {
         ?>
        <tr>
          <td><?php echo $value['green_head']; ?></td>
             <td><?php echo $value['parag1']; ?></td>
            <td><?php echo $value['parag2']; ?></td>
           

            <span>
             <td><a href="green_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="green_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a></td>
            </span>
        </tr>
        <?php  
        
        } 
          if(empty($value)){
                echo '<tr><td colspan="6" class="text-center">no data available</td></tr>';
          }
          ?>
          
          
          
      </table>
</div>

 <?php
 require_once 'footer.php';
  ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
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
 <?php
require_once 'header.php'; 
?>

<?php
require 'db.php';
// require 'cookie.php';



if(isset($_GET['search'])){
  $search = $_GET['search'];
  $select_query = "SELECT * FROM about where about_title like '%$search%' or about_des like '%$search%'";
  $return_db = mysqli_query($db_connection,$select_query);
}

else{
  $select_query = "SELECT * FROM  about";
  $return_db = mysqli_query($db_connection,$select_query);
}
?>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  


<div class="col-lg-12 m-auto">
        <div class="col-lg-12 text-center py-3">
          <div class="row">
           
           
          </div>
          <hr>
        </div>
        <table class="table table-striped" id="table_id">
          <thead class="bg-warning">
            <tr>
              <th>ID</th>
              
              <th>SERVICE TITLE</th>
              <th>SERVICE DESCRIPTION</th>
              <th>PHOTO</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
          <?php
          foreach ($return_db as $value) {

           ?>
          <tr class="">
            <td><?php echo  $value['id'];?></td>
            <td><?php echo  $value['service_title'];?></td>
            <td><?php echo  $value['service_des'];?></td>
            <td> <img src = "uploads/service/<?php echo  $value['service_img'];?>" alt="" width="50"> </td>
            <td>
              
              <a href="service_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a>
              <a href="service_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a>

            </td>
              
              

          </tr>
          <?php
              }

              if(empty($value)){
                echo '<tr><td colspan="6" class="text-center">no data available</td></tr>';
              }
           ?>
         </tbody>
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

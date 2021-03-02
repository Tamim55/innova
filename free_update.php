<?php
require 'db.php';
require 'session_check.php';

 $id=$_POST['id'];
 $free_head=$_POST['free_head'];
 $parag=$_POST['parag'];


 $update="UPDATE free_cost SET free_head='$free_head',parag='$parag' WHERE id='$id'";
 $query=mysqli_query($db_connection,$update);

 if (!$query) {
   echo "Failed";
  
 }
 else {
   Header("location:free.php");
 }
 ?>

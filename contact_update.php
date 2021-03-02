<?php
require 'session_check.php';

$user_id = $_POST['id'];
$name = $_POST['fname'];
$email = $_POST['desc'];


$db_connection = mysqli_connect($hostname, $username, $password, $dbname);

if($db_connection==true){
    
     $update_query = "UPDATE contact SET test_title='$name', test_des='$email' WHERE id=$user_id";
      $result = mysqli_query($db_connection, $update_query);
      header('location:contact.php');
    
}


     
    
 

else{
  $update_query = "UPDATE contact SET test_title='$name', test_des='$email' WHERE id=$user_id";
  $result = mysqli_query($db_connection, $update_query);
  header('location:test.php');
}



?>

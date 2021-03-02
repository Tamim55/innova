<?php
require 'db.php';

$username = $_POST['username'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//$Confirm password = $_POST['Confirm password'];

$phone = $_POST['Phone'];
$Address = $_POST['Address'];
$Age= $_POST['Age'];
$Gender = $_POST['Gender'];
$Birthday = $_POST['Birthday'];
$City = $_POST['City'];
$Zip = $_POST['Zip'];
$pic = $_POST['profile_photo'];

$select_query = "SELECT COUNT(*) as tahsan FROM user_info ";

$result1 = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result1);

if($after_assoc['tahsan']==1){
  echo "email addresss already exist";   
}
else {
  $uploaded_file = $_FILES['profile_photo'];
  $after_explode = explode('.',$uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpg','jpeg','png','gif');
  if(in_array($extention, $allowed_extention)){
    if($uploaded_file['size'] <= 2000000){
      $insert_query = "INSERT INTO user_info (username, lastname, email, password, phone, address, age,gender, birthday, city, zip,profile_photo) VALUES ('$username', '$last_name','$email','$password','$phone',  '$Address','$Age', '$Gender','$Birthday','$City','$Zip','$pic')";
      $result = mysqli_query($db_connection, $insert_query);

      $last_id = mysqli_insert_id($db_connection);
      $file_name = $last_id.'.'.$extention;
      $new_location = 'uploads/user_photo/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE user_info SET profile_photo= '$file_name' WHERE id=$last_id";
      $photo_uploaded = mysqli_query($db_connection,$update);
      header('location:register.php');

    }
    else{
      echo "file is too large";
    }
  }
  else{
    echo "Invalid File Format";
  }

}




 ?>

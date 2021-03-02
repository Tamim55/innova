<?php

session_start();

require 'db.php';

$about_title = $_POST['about_title'];
$choose_des = $_POST['choose_des'];
$paragraph = $_POST['paragraph'];
$choose_1 = $_POST['choose_1'];
$choose_2 = $_POST['choose_2'];
$choose_3 = $_POST['choose_3'];
$choose_4 = $_POST['choose_4'];

$uploaded_file = $_FILES['about_img'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 20000000){

    $insert = "INSERT INTO about (header,para1,choose,point1,point2,point3,point4) VALUES ('$about_title', '$paragraph', '$choose_des', '$choose_1', '$choose_2', '$choose_3', '$choose_4')";
      
    
    $result = mysqli_query($db_connection, $insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/about/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE about SET image='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    header('location:about.php');



  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}

?>

<?php
require 'db.php';
require 'session_check.php';

$green_head = $_POST['green_head'];
$parag1 = $_POST['parag11'];
$parag2 = $_POST['parag22'];


    $insert = "INSERT INTO green (green_head,parag1,parag2) VALUES ('$green_head', '$parag1','$parag2')";

    $result = mysqli_query($db_connection, $insert);

   header('location:green.php');


?>

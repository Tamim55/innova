<?php
require 'db.php';

$free_head = $_POST['free_head'];
$parag = $_POST['parag'];


    $insert = "INSERT INTO free_cost (free_head,parag) VALUES ('$free_head', '$parag')";

    $result = mysqli_query($db_connection, $insert);

   header('location:free.php');


?>

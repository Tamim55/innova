<?php
require 'db.php';

$free_head = $_POST['callhead'];
$parag = $_POST['parag2'];


    $insert = "INSERT INTO call_tbl (head,para) VALUES ('$free_head', '$parag')";

    $result = mysqli_query($db_connection, $insert);

   header('location:call.php');


?>

<?php
require 'db.php';

$plain_text = $_POST['plain_text'];
$foreground = $_POST['foreground'];
$background = $_POST['background'];


    $insert = "INSERT INTO copyright (copy_right,url_front,url) VALUES ('$plain_text', '$foreground','$background')";

    $result = mysqli_query($db_connection, $insert);

   header('location:copy_view.php');


?>
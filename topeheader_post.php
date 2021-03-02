<?php
require 'db.php';

$about_head = $_POST['about_head'];
$about = $_POST['about'];
$services_head = $_POST['services_head'];
$services = $_POST['services'];

$testimonials_head = $_POST['testimonials_head'];
$testimonials = $_POST['testimonials'];
$contact_head = $_POST['contact_head'];
$contact = $_POST['contact'];

    $insert = "INSERT INTO tope_head (about_head,about,services_head,services,testimonials_head,testimonials,contact_head,contact) VALUES ('$about_head', '$about', '$services_head','$services ','$testimonials_head ','$testimonials','$contact_head','$contact')";

    $result = mysqli_query($db_connection, $insert);

   header('location:tope.php');


?>
 
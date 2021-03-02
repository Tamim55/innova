<?php
require 'db.php';

$contact_head = $_POST['contact_head'];
$address_head = $_POST['address_head'];
$address = $_POST['address'];
$phone_head = $_POST['phone_head'];
$phone = $_POST['phone'];
$email_head = $_POST['email_head'];
$email = $_POST['email'];

    $insert = "INSERT INTO contact (contact_head,address_head,address,phone_head,phone,email_head,email) VALUES ('$contact_head', '$address_head','$address ','$phone_head ','$phone ','$email_head ','$email ')";

    $result = mysqli_query($db_connection, $insert);

   header('location:contact.php');


?>

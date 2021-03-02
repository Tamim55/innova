<?php
$hostname = "localhost";
 $username = "root";
 $password = "";
 $dbname = "pani";

 $dbconnect = mysqli_connect( $hostname,$username, $password, $dbname );
 if ($dbconnect){

  echo "db connected";
 }
else{

  echo " jaamala asy code";
}
?>
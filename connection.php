<?php
$servername="127.0.0.1:3310";
$username="root";
$password="";
$database="tooryanaad";

$conn=mysqli_connect($servername,$username,$password,$database);
  mysqli_set_charset( $conn, 'utf8');
?>
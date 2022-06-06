<?php
$server_name ="localhost";
$user_name ="utopia";
$password ="12345678";
$db="utopia";

$conn= mysqli_connect($server_name,$user_name,$password,$db);

//check conn connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";
  ?>
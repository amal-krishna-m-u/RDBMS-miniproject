<?php 
$servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "project";

   $conn = mysqli_connect($servername,$username,$password,$dbname);
 if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
} 
  ?>
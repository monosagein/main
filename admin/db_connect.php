<?php

$servername = "localhost";
$username = "u730499103_admin";
$password = "Admin.elego2023";
$db   = "u730499103_elegodb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db='selection';

// Create connection

$conn =  new mysqli($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
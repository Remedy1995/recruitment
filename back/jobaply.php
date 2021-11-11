<?php
include ('connect.php');
session_start();
$name=$_POST['post'];
$course=$_POST['post'];
$qualification=$_POST['duration'];
$btn1=$_POST['submit'];



$email= $_SESSION['email'];
//echo $email;
 if($_SERVER['REQUEST_METHOD'] == "POST" && isset($btn1)){
	 $sql = "INSERT INTO `jobsap`(`post`, `ppost`, `duration`, `email`)
VALUES ('$name', '$course', '$qualification','$email')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("location: /kofi/done.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }


?>
<?php
include ('connect.php');
 session_start();
$name=$_POST['school'];
$course=$_POST['course'];
$qualification=$_POST['qualification'];
$year=$_POST['year'];

$btn1=$_POST['submit'];
$email= $_SESSION['email'];
echo $email;
 if($_SERVER['REQUEST_METHOD'] == "POST" && isset($btn1)){
	 $sql = "INSERT INTO `academic`( `schooll`, `course`, `qualification`, `year`, `email`)
VALUES ('$name', '$course', '$qualification','$year','$email')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("location: /kofi/jobapplied1.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }


?>
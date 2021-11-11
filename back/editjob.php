<?php
include ("connect.php");
session_start();
$id=$_GET['id'];
echo $_POST['job'];
$job=$_POST['job'];
$qualification=$_POST['qualification'];
$min=$_POST['min'];
$max=$_POST['max'];
$btn=$_POST['submit'];
 if($_SERVER['REQUEST_METHOD'] == "POST" && isset($btn)){
	 $sql = "UPDATE `jobs` SET `jobs`='$job',`qualification`='$qualification',
	 `min`='$min',`max`='$max' WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   header("location: /kofi/admin/jobavailahble.php");
   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }

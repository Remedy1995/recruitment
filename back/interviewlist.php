<?php
include ('connect.php');
session_start();

$stmt = "SELECT * FROM `interview` WHERE id='".$_GET['id']."'";
$result = $conn->query($stmt);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


$name=$row['fname'];
//$age=$row['age'];
$gender=$row['gender'];
$location=$row['location'];
$email=$row['email'];
//$btn1=$row['submit'];

echo $row['fname'];
echo $email;
 $sql = "INSERT INTO `acepted`(`fname`, `gender`, `email`, `location`)
VALUES ('$name', '$gender','$email','$location')";
$sql1=" DELETE FROM `interview` WHERE id='".$_GET['id']."'";
if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("location: /kofi/admin/aceptedlist.php");
  $conn->query($sql1);
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 

<?php
include ('connect.php');
session_start();



echo $email;
 $sql = "DELETE FROM `newaplicant` WHERE id='".$_GET['id']."'";
if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("location: /kofi/admin/newApplicant.php");
  $conn->query($sql1);
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 


?>
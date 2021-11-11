<?php
include ('connect.php');
session_start();




 $sql = "DELETE FROM `interview` WHERE id='".$_GET['id']."'";
if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("location: /kofi/admin/interviewlist.php");
  $conn->query($sql);
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 


?>
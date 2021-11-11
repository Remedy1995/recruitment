<?php
include ('connect.php');
 session_start();
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$location=$_POST['Location'];
$email=$_POST['email'];
$pass=$_POST['password'];
$_SESSION['email'] = $email;
$btn1=$_POST['submit'];


$title=$_POST['title'];


$pname=rand(1000,10000)."-".$_FILES["file"]["name"];

 if($_SERVER['REQUEST_METHOD'] == "POST" && isset($btn1)){



$tname=$_FILES["file"]["tmp_name"];



$upload_directory='../admin/upload';

move_uploaded_file($tname,$upload_directory.'/'.$pname);






	 $sql = "INSERT INTO `login`(`fname`,`age`, `gender`, `email`, `location`, `password`)
VALUES ('$name', '$age', '$gender','$email','$location','$pass')";
$result=$conn->query($sql);

 $sql1 = "INSERT INTO `newaplicant`(`fname`, `gender`, `location`, `email`, `title`, `file`)
VALUES ('$name', '$gender','$location','$email','$title','$pname')";
$result1=$conn->query($sql1);

//$sql2 = "INSERT INTO `interview`(`fname`, `gender`, `email`, `location`)
//VALUES('$name', '$gender','$email','$location')";
//$result2=$conn->query($sql2);


if ($result1&$result === TRUE) {
  //echo "New record created successfully";
  header("location: /kofi/academicinfo1.php?id=$email");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }


?>
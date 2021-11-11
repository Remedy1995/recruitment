<?php
session_start();

?>
<script>
function myFunction() {
  //alert("Successful");
}
</script>
<html>
<head><title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>


<center><form method="post" action="back/register.php">
<center><h1>Register</h1></center>
 <div class="form-group align-items-center">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" name="name" required>
	
</div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Age</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="age" name="age" required>
</div>
<div class="form-group ">
<label for="exampleInputEmail1">Gender</label>
       <select  name="gender" class="form-control">
	    <option value="Admin">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
       <i class="fa fa-user"></i>
     </div>
 <div class="form-group align-items-center">
    <label for="exampleInputEmail1">Location</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="Location" required>
</div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required>
</div>
 <div class="form-group align-items-center">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" name="password" required>
</div>

 <center> <button name="submit" class="btn btn-primary" onclick="myFunction()">Next</button></center>
</form></center>
<style>
body {
  background-image: url('img/q.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
form{
	magin-top:30pc;
	background-color:#ffffff;
	width: 50%;
	text-align: left;
	margin-top: 2%;
}
</style>
</body>
</html>
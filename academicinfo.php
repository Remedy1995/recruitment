<?php
include ('connect.php');
 session_start();
  $_SESSION['email'];

 ?>
<html>
<head><title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<center><form method="POST" action="/selection/back/acedemicinfo.php?id="<?=$_SESSION['email']?>"">
<center><h1>Academic Info</h1> </center>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">School/Institution Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="school" name="school">
</div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Course</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Couse" name="course" required>
</div>
<div class="form-group ">
<label for="exampleInputEmail1">Quallification</label>
       <select  name="qualification" class="form-control" required>
	    <option value="Select">Select</option>
  <option value="Degree">Degree</option>
  <option value="H.N.D">H.N.D</option>
  <option value="S.H.S">S.H.S</option>
  <option value="J.N.S">J.H.S</option>
</select>
       <i class="fa fa-user"></i>
     </div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Year of Complition</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Year" name="year" required>
</div>

 <center> <button name="submit" class="btn btn-primary">Next</button></center>
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
	margin-top: 1%;
}
</style>
</body>
</html>
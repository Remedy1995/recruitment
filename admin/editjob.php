<?php
session_start();
include ('connect.php');
$id=$_GET['id'];
$sql = "SELECT * FROM `jobs` WHERE id=$id";
$result = $conn->query($sql);

?>
<script>
function myFunction() {
  //alert("Successful");
}
</script>
<html>
<head><title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">WELCOME <span>ADMIN</span></a></h1>
	        <ul class="list-unstyled components mb-5">
                <li class="active">
	            <a href="dasboard.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li class="active">
	            <a href="interviewlist.php"><span class="fa fa-home mr-3"></span> Interview List</a>
	          </li>
	          <li>
	              <a href="newApplicant.php"><span class="fa fa-user mr-3"></span>New Applicant</a>
	          </li>
	          <li>
              <a href="aceptedlist.php"><span class="fa fa-briefcase mr-3"></span>Acepted List</a>
	          </li>
	          <li>
              <a href="jobavailahble.php"><span class="fa fa-sticky-note mr-3"></span> Edit Jobs</a>
	          </li>
			  <BR>
			  <BR>
			  <BR>
			  <BR>
			  <BR>
	         <li>
              <a href="logout.php"><span class="fa fa-sticky-note mr-3"></span> logout</a>
	          </li>
	        </ul>


	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Group 3<a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
		<center>

</center>	

 <!-- Custom Theme files 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
       <li class="nav-item active">
        <a class="nav-link" href="dasboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="interviewlist.php">Interview list</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aceptedlist.php">Acepted List</a>
      
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>

</nav>-->
<?php 
 $i=1;
foreach ($result as $value) { ?>

<center><form method="post" action="/kofi/back/editjob.php?id=<?=$id?>">
<center><h1>Edit</h1></center>
 <div class="form-group align-items-center">
    <label for="exampleInputEmail1">Jobs</label>
    <input type="text" name="job" value="<?=$value['jobs']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name"  required>
	
</div>
<div class="form-group ">
<label for="exampleInputEmail1">Qualification</label>
       <select  name="qualification" class="form-control" >
	   <option value="ALL"><?=$value['qualification']?></option>
	    <option value="ALL">ALL</option>
  <option value="Degree">Degree</option>
  <option value="H.N.D">H.N.D</option>
  <option value="S.H.S">S.H.S</option>
  <option value="J.H.S">J.H.S</option>
</select>
       <i class="fa fa-user"></i>
     </div>
 <div class="form-group align-items-center">
    <label for="exampleInputEmail1">Minimum Salary</label>
    <input type="text" value="<?=$value['min']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="min" required>
</div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Maximum Salary</label>
    <input type="text" value="<?=$value['max']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="max" required>
</div>

 <center> <button name="submit" class="btn btn-primary" onclick="myFunction()">SAVE</button></center>
</form></center>
 <?php $i++; } ?>
 	</div>
<style>
body {
background-image: url('images/bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

table{
	margin-top: 0.00%;
	margin-left: 2%;
	 border: 1px solid white;
	  height: 10%;
	  
	 
}
</style>
<script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>
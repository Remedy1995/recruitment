<?php
session_start();
include 'connect.php';
 
$sql = "SELECT * FROM `newaplicant` WHERE email='".$_GET['id']."'";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM `academic` WHERE email='".$_GET['id']."'";
$result1 = $conn->query($sql1);
$sql2 = "SELECT * FROM `jobsap` WHERE email='".$_GET['id']."'";
$result2 = $conn->query($sql2);
//echo $_GET['id'];
$conn->close();
?>
<script>
function myFunction() {
  alert("Successful");
}
</script>
<html>
<head><title>New Apllicant</title>
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
		  		<h1><a href="index.html" class="logo">Detail<span>ADMIN</span></a></h1>
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
              <a href="jobavailahble.php"><span class="fa fa-sticky-note mr-3"></span> Edith Jobs</a>
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
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
		<center>

</center>	
<table id="table1">
<tr><td><h1>Personal Infomation<h1></td></tr>
<tr><td> <table class="table table-dark table-striped">
     <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                       
                                                        <th>Gender</th>
                                                        <th>Location</th>
                                                        <th>Email</th>
														
						
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach ($result as $value) { ?>
                                                    <tr>
                                                       
                                                     <td><?=$value['id']?></td>
                                                     
                                                     <td><?=$value['fname']?></td>
	                                                 <td><?=$value['gender']?></td>
	                                                 <td><?=$value['location']?></td>
													  <td><?=$value['email']?></td>
                                                       
                                                    </tr>
                                                <?php $i++; } ?>
                                                </tbody>
                                            </table></td></tr>
<tr><td><h1>Education Infomation<h1></td></tr>
<tr><td><table class="table table-dark table-striped">
     <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>School/Institution</th>
                                                       
                                                        <th>Course</th>
                                                        <th>Qualification</th>
                                                        <th>Year</th>
														
						
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach ($result1 as $value) { ?>
                                                    <tr>
                                                       
                                                     <td><?=$value['id']?></td>
                                                     
                                                     <td><?=$value['schooll']?></td>
	                                                 <td><?=$value['course']?></td>
	                                                 <td><?=$value['qualification']?></td>
													  <td><?=$value['year']?></td>
                                                       
                                                    </tr>
                                                <?php $i++; } ?>
                                                </tbody>
                                            </table>
											

	<h1>Job Infomation<h1></td></tr>
<tr><td> <table class="table table-dark table-striped">
     <thead>
                                                    <tr>
                                                        <th>#</th>
                                                       
                                                       
                                                        <th>Post Applied</th>
                                                        <th>Previous Post Held</th>
                                                        <th>Duration</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach ($result2 as $value) { ?>
                                                    <tr>
                                                       
                                                     <td><?=$value['id']?></td>
                                                     
                                                     <td><?=$value['post']?></td>
	                                                 <td><?=$value['ppost']?></td>
	                                                 <td><?=$value['duration']?></td>
													
                                                    </tr>
                                                <?php $i++; } ?>
                                                </tbody>
                                            </table>

	
</table>



	
	 
	
	
	
	</div>
</body>
<style>
body {
  background-image: url('images/bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1{
	background-color:#ffffff;
}
#table1{
	 background-color: #ffffff;
	margin-top: 10%;
	margin-left: 1%;
	 border: 1px solid white;
	  height: 10%;
	  width:80%;
	  
	 
}
</style>
<script src="js1/jquery.min.js"></script>
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>
</html>
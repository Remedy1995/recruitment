<?php
session_start();

include 'connect.php';

$name=$_SESSION['user'];
$sql = "SELECT * FROM `newaplicant` WHERE email='".$_SESSION['user']."'";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM `jobsap` WHERE email='$name'";
$result1 = $conn->query($sql1);

?>
<script>
function myFunction() {
  alert("Successful");
}
</script>
<html>
<head><title>EDIT</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style2.css">
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
		  		<h1><a href="#" class="logo">Interview List<span>ADMIN</span></a></h1>
	        <ul class="list-unstyled components mb-5">
           <li class="active">
	            <a href="userhome.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li class="active">
	            <a href="jobavailahble.php"><span class="fa fa-home mr-3"></span> job Available</a>
	          </li>
	        
	          <li>
              <a href="vpersonal.php"><span class="fa fa-briefcase mr-3"></span>View  Personal info</a>
	          </li>
	          
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

<!-- Grey with black text --
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" onclick="myFunction()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
   
</nav> -->

<table id="table1">
	<tr><td><h1>Personal Infomation</h1> </td></tr>
	<tr><td><table class="table table-dark table-striped">
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
                                            </table> </td></tr>
	<tr><td><h1> Job Infomation </h1> </td></tr>
	<tr><td>  <table class="table table-dark table-striped">
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
                                                    foreach ($result1 as $value) { ?>
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
 </td></tr>
</table>>




                                          

</body>
<style>
body {
  background-image: url('images/bg.jpg');
    background-repeat: repeat-x;
    animation: slideleft 20000s infinite linear;
    -webkit-animation: slideleft 20000s infinite linear;
    background-size: cover;
	-webkit-background-size:cover;
	-moz-background-size:cover; 
    background-attachment: fixed;
    position: relative;
	min-height: 100vh;}
	   
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
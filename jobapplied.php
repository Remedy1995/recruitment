<?php
session_start();
include 'connect.php';

$sql = "SELECT * FROM `jobs` WHERE 1";
$result = $conn->query($sql);

//echo $_SESSION['email'];

$conn->close();
?>
<html>
<head><title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<center>
<table>
<tr>
<td>
<form method="POST" action="/selection/back/jobaply.php">
<center><h1>Job Application</h1> </center>

<div class="form-group ">
<label for="exampleInputEmail1">Postion Applaying</label>
       <select  name="post" class="form-control" required>
	    <option value="Select">Select</option>
  <option value="Cleaner">Cleaner</option>
  <option value="Front Desk Receptionist">Front Desk Receptionist</option>
   <option value="Bar Tender">Bar Tender</option>
    <option value="Cook">Cook</option>
    <option value="Waiter">Waiter</option>
	<option value="Waitress">Waitress</option>
</select>
       <i class="fa fa-user"></i>
     </div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Privious Postion</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Postion" name="post" required>
</div>
<div class="form-group align-items-center">
    <label for="exampleInputEmail1">Duration Worked</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Duration" name="duration" required>
</div>

 <center> <button name="submit" class="btn btn-primary">Submit</button></center>
</form>
</td>
<td>
<&nbsp>
</td>
<td >
<table class="table table-dark table-striped" >
     <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Jobs Aviallable</th>
                                                       
                                                        <th>Qualification</th>
                                                        <th>Min Salary GHc</th>
                                                        <th>Max Salary GHc</th>
														
						
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach ($result as $value) { ?>
                                                    <tr>
                                                       
                                                     <td><?=$value['id']?></td>
                                                     
                                                    <td><?=$value['jobs']?></td>
	                                                 <td><?=$value['qualification']?></td>
	                                                 <td><?=$value['min']?></td>
													  <td><?=$value['max']?></td><td>
														
														</td>
                                                    </tr>
                                                <?php $i++; } ?>
                                                </tbody>
                                            </table>
</td>
</tr>
</table>
</center>
<style>

form{
	magin-top:30pc;
	background-color:#ffffff;
	width: 450px;
	text-align: left;
	margin-top: 3%;
}
body {
  background-image: url('img/q.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
</body>
</html>
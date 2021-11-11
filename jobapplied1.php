<?php
session_start();
include 'connect.php';

$sql = "SELECT * FROM `jobs` WHERE 1";
$result = $conn->query($sql);

//echo $_SESSION['email'];

$conn->close();
?>
-->
<!DOCTYPE html>
<html>
<head>
<title>Selection</title>
<!-- Meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="package signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<link href="css/stylea.css" rel="stylesheet" type="text/css" media="all">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="css/bootstrap1.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="form">
<h1>Job Application</h1>
  <div class="form-content" style="background: darkblue;
    
    height: 550px;">
  <form method="POST" action="/kofi/back/jobaply.php">
     
      <div class="name">
      <label for="exampleInputEmail1">Postion Applying</label>
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
      <div class="email">
       <label for="exampleInputEmail1">Previous Postion</label>
    <input type="text" class="form-control" pattern="[A-Za-z ]{5,}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Postion" name="post" required>
      </div>
      <div class="pass1">
       <label for="exampleInputEmail1">Duration Worked</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Duration" name="duration" required>
      </div>
    
 
      <div class="signup">
       <button name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <table class="table table-dark table-striped" style="color: #fff;background-color: purple;position: relative;left: 450px!important;top: -550px;">
     <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Jobs Available</th>
                                                       
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
  </div>
</div>
<footer>&copy; Selection. All rights reserved | Design by Selection</a></footer>
</body>
</html>
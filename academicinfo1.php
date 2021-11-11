<?php
include ('connect.php');
 session_start();
  $_SESSION['email'];

 ?>
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
<h1><center><h1>Academic Info</h1> </center></h1>
  <div class="form-content">
    <form method="POST" action="/kofi/back/acedemicinfo.php?id="<?=$_SESSION['email']?>"">
      
      <div class="name">
       <label for="exampleInputEmail1">School/Institution Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="school" name="school">
      </div>
      <div class="email">
        <label for="exampleInputEmail1">Course</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Couse" name="course" required>
      </div>
      <div class="pass1">
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
      <div class="pass2">
     <label for="exampleInputEmail1">Year of Completion</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Year" name="year" required>
      </div>
   
      <div class="signup">
      <button name="submit" class="btn btn-primary">Next</button></center>
      </div>
    </form>
  </div>
</div>
<footer>&copy; Group 3. All rights reserved | Design by Group 3</a></footer>
</body>
</html>
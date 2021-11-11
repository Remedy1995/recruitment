<?php
session_start();

?>


<script>
function myFunction() {
  //alert("Successful");
}
</script>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
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
<h1>Selection Signup Form</h1>
  <div class="form-content">
    <form  method="post"  action="back/register.php" enctype="multipart/form-data">
      
      <div class="name">
        <label>Name</label>
       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" name="name" pattern="[A-Za-z ]{5,}" required>
      </div>
      <div class="email">
        <label>Age</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="age" name="age" required>
      </div>
      <div class="pass1">
        <label for="exampleInputEmail1">Gender</label>
       <select  name="gender" class="form-control">
      <option value="Admin">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
       <i class="fa fa-user"></i>
      </div>
      <div class="pass2">
      <label for="exampleInputEmail1">Location</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="Location" pattern="[A-Za-z ]{5,}" required>
      </div>
      <div class="pass2">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required>
</div>
 <div class="pass2">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" name="password" required>
</div>

 <div class="pass2">
     <p style="font-size: 17px;
    color: black;
    font-weight: 600;
    background: #f8f9fa;
    text-align: left;
    ">file name(Applicant Name)</p>
    <input type="text" class="form-control" pattern="[A-Za-z ]{5,}" id="exampleInputEmail1"   name="title" required>
    <input type="file" id="exampleInputEmail1"   name="file"><br>
</div>
      <div class="signup">
       <button name="submit" class="btn btn-primary" onclick="myFunction()">Next</button>
      </div>
    </form>
  </div>
</div>
<footer>&copy; Selection. All rights reserved | Developed By Group 3</a></footer>
</body>
</html>



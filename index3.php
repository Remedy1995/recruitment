<?php
include ("connect.php");
?>

<html>
<head>
<title>Login</title>
<link href="css/index.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<form method="post" action="logincontroler.php">
<div class="login-form">
     <h1>Welcome</h1>
     <div class="form-group ">
       <input type="email" class="form-control" placeholder="Email" id="UserName" name="username" required="required">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" required="required" autocomplete="off" title="Password must be 8 characters long.">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a href="register.php">register</a>
     <button  class="log-btn" >Log in</button>
   
    
   </div>
</form>
<style>
body {
  background-image: url('img/a.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</body>
</html>
<?php
   include ("connect.php");
   //include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $sql = "SELECT * FROM `login` WHERE email = '$myusername' and password = '$mypassword'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	 
   if (isset($row)&&($row['role']==='Admin')) {
    $_SESSION['user'] = $myusername;
 echo '<script language="javascript">';
      echo 'alert("You have successfully logged in!!")';
      echo '</script>';
      echo "<script type='text/javascript'>window.location.href='http://localhost/kofi/admin/dasboard.php'</script>";

    } else if(isset($row)&&($row['role']==='user')){
         // session_register("myusername");
         $_SESSION['user'] = $myusername;
         
         //header("location: userhome.php");

          echo '<script language="javascript">';
      echo 'alert("You have successfully logged in!!")';
      echo '</script>';
      echo "<script type='text/javascript'>window.location.href='http://localhost/kofi/userhome.php'</script>";
      }
else {

      echo '<script language="javascript">';
      echo 'alert("Incorrect Login Credentials !!")';
      echo '</script>';
      echo "<script type='text/javascript'>window.location.href='http://localhost/kofi/index.php'</script>";

    }

      /*if($row['role']==='Admin') {
        // session_register("myusername");
         $_SESSION['user'] = $myusername;
       //  print_r($row['role']);
         ;
         header("location: admin/dasboard.php");
      }else if($row['role']==='user'){
         // session_register("myusername");
         $_SESSION['user'] = $myusername;
         
         header("location: userhome.php");
      }
      else{
       
		  header("location: index.php");
	  }
     $_SESSION['role'] =$row;*/
   }
?>

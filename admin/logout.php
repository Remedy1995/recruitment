<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: /kofi/index.php");
	  // remove all session variables
session_unset();

// destroy the session
session_destroy();
   }
?>
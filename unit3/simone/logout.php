<?php
	include("template-top.php");
	
	$username = $_SESSION['username'];
	  
	 $_SESSION['userid'] = '';
	 $_SESSION['username'] = '';
	 
	 echo "$username has been logged out.";

	include("template-bottom.php");
?>	
   
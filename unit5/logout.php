<?php
	include("template-top.php");
	
	$username = $_SESSION['username'];

	logoutUser();
	
	echo "$username has been successfully logged out.";
	
	include("template-bottom.php");
?>
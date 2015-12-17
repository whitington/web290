<?php
	include("template-top.php");

	$showForm = TRUE;
	if(isset($_REQUEST['submit'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		if($username == "" OR $password == "") {
			echo '<p class="bg-info">Please enter a username and password to login.</p>';
		} else {
			$sql = "SELECT * FROM users 
					WHERE username = '$username' 
					AND password = '$password'";
			$result = mysql_query($sql);
			$rowCnt = mysql_num_rows($result);
			if($rowCnt == 1) {
				$row = mysql_fetch_array($result);
				$_SESSION['userid'] = $row['id'];
				$_SESSION['username'] = $row['username'];
				$showForm = FALSE;
			} else {
				echo "That username password combination was not found.";
			}
		}
	}
?>

<?php if($showForm == TRUE) { ?>
<form action="login.php" method="GET">
	<input name="username" type="text"><br /><br />
	<input name="password" type="text"><br />
	<input name="submit" type="submit" value="Login">
</form>
<?php } else { 
		echo "Welcome back ".$_SESSION['username'];
	  }
?>


<?php	
	include("template-bottom.php");
?>

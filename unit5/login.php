<?php
	include("template-top.php");

	$showForm = TRUE;
	if(isset($_REQUEST['submit'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		if($username == "" OR $password == "") {
			echo '<p class="bg-info">Please enter a username and password to login.</p>';
		} else {
			if(findUser($username, $password) != FALSE) {
				loginUser(findUser($username, $password), $username);
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

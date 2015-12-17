<?php
	include("template-top.php");
	echo "<h3>Login</h3><br />";
	
	if(isset($_REQUEST['submit'])) {
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
	if($username == "" OR $password == "") {
		echo '<h4 class="bg-warning">Please enter a username and password to login.</h4><br />';
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
		echo $sql;
		$result = mysql_query($sql);
		$rowCnt = mysql_num_rows($result);
		if($rowCnt == 1){
			$row = mysql_fetch_array($result);
			$_SESSION['userid'] = $row['id'];
			$_SESSION['username'] = $row['username'];
		} else {
			echo "That user was not found.";
		}
	}
	}
?>	
	
	<form action="login.php" method="GET">
		<label>Username</label><br/>
		<input name="username" type="text"><br /><br />
		<label>Password</label><br/>
		<input name="password" type="text"><br /><br />
		<input class="btn btn-success" name="submit" type="submit" value="Login">
	</form>
	
	
	
	
  
  
   
<?php	
	
	include("template-bottom.php");
?>

	
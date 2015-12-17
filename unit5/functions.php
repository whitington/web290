<?php

function hello($strName) {
	return "Hello $strName<br />";
}

function logoutUser() {
	$_SESSION['userid'] = '';
	$_SESSION['username'] = '';
}

function findUser($username, $password) {
	$sql = "SELECT * FROM users 
		WHERE username = '$username' 
		AND password = '$password'";
	$result = mysql_query($sql);
	$rowCnt = mysql_num_rows($result);
	if($rowCnt == 1) {
		$row = mysql_fetch_array($result);
		return $row['id'];
	} else {
		return FALSE;
	}
}

function loginUser($userid, $username) {
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $username;
}
?>










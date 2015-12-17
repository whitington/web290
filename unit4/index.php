<?php
	include("template-top.php");

	$sql = "SELECT * FROM posts, users WHERE posts.user_id = users.id";
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)) {
		$title = $row['post_title'];
		$content = $row['post_content'];
		$postid = $row['post_id'];
		$userid = $row['user_id'];
		$username = $row['username'];
		
		echo "<h2>$title</h2>";
		echo "<h4>Author: $username  ";
		if($_SESSION['userid'] == $userid) {
			echo '<a href="editpost.php?postid='.$postid.'">edit</a> ';
			echo "<a href=\"deletepost.php?postid=$postid\">delete</a>";
		}
		echo "</h4>";
		echo substr($content, 0, 200);
		echo "... ";
		echo '<a href="viewpost.php?postid='.$postid.'">Read More</a>';
		
		echo '<br /><br />';
	}
	
	include("template-bottom.php");
?>
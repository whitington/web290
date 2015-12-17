<?php
	include("template-top.php");

	$sql = "SELECT * FROM posts";
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)) {
		$title = $row['post_title'];
		$content = $row['post_content'];
		$postid = $row['post_id'];
		
		echo "<h2>$title</h2>";
		echo substr($content, 0, 200);
		echo "... ";
		echo '<a href="viewpost.php?postid='.$postid.'">Read More</a>';
		
		echo '<br /><br />';
	}
	
	include("template-bottom.php");
?>
<?php
	include("template-top.php");
	
	  
	  $sql = "SELECT * FROM posts";
	  $results = mysql_query ($sql);
	  
	  while($row = mysql_fetch_array($results)) {
		  $title = $row['post_title'];
		  $content = $row['post_content'];
		  $postid = $row['post_id'];
		  
		  echo "<h2>$title</h2>";
		  echo '<br /><br />';
		  echo  substr($content,0, 150);
		  echo "....";
		  echo '<a href="viewpost.php?postid=';
		  echo $postid;
		  echo '">Read more</a>';
		  echo '<br /><br />';
	  }

	include("template-bottom.php");
?>	
   
 <?php
	include("template-top.php");

	$postid = $_GET['postid'];
	
	$sql = "DELETE FROM posts WHERE post_id = $postid";
	$result = mysql_query($sql);
	
	if($result == TRUE) {
		echo "Your post has been deleted.";
	} else {
		echo "There was a problem deleting your post.";
	}
	
	include("template-bottom.php");
?>
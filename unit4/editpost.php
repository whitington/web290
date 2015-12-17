<?php
	include("template-top.php");

	if(isset($_REQUEST['submit'])) {
		$title = $_REQUEST['title'];
		$content = $_REQUEST['content'];
		$userid = $_SESSION['userid'];
		$postid = $_REQUEST['postid'];
		
		if($title == "" OR $content == "") {
			echo "Please enter a title and blog post.<br />";
		} else {
			// add form data to the database
			$sql = "UPDATE posts SET post_title = '$title', post_content = '$content' 
			WHERE post_id = $postid";
			$result = mysql_query($sql);
			
			if($result == TRUE) {
				echo "Your post has been saved.<br /><br />";
			} else {
				echo "There was a problem saving your post.<br /><br />";
			}
		}
	}
	
	$postid = $_GET['postid'];
	
	$sql = "SELECT * FROM posts WHERE post_id = $postid";
	$result = mysql_query($sql);
	
	$post = mysql_fetch_array($result);
	
	$title = $post['post_title'];
	$content = $post['post_content'];
	$postid = $post['post_id'];
	$userid = $post['user_id'];

?>

<form action="editpost.php" method="GET">
	Title: <input type="text" name="title" value="<?php echo $title; ?>"><br /><br />
	Post: <textarea name="content" rows="5"><?php echo $content; ?></textarea><br /><br />
	<input type="hidden" name="postid" value="<?php echo $postid; ?>">
	<input type="submit" name="submit">
</form>

<?php	
	include("template-bottom.php");
?>
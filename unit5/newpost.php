 <?php
include("template-top.php");

if(isset($_REQUEST['submit'])) {
	$title = $_REQUEST['title'];
	$content = $_REQUEST['content'];
	$userid = $_SESSION['userid'];
	$imgpath = $_REQUEST['imgpath'];
	
	if($title == "" OR $content == "") {
		echo "Please enter a title and blog post.<br />";
	} else {
		// add form data to the database
		$sql = "INSERT INTO posts 
				(post_title, post_content, user_id, imgpath) 
				VALUES ('$title', '$content', $userid, '$imgpath')";
		//echo $sql;
		$result = mysql_query($sql);
			
		if($result == TRUE) {
			echo "Your post has been saved.<br /><br />";
		} else {
			echo "There was a problem saving your post.<br /><br />";
		}
	}
}

?>

<form action="newpost.php" method="GET">
	Title: <input type="text" name="title"><br /><br />
	Post: <textarea name="content" rows="5"></textarea><br /><br />
	Img Path: <input type="text" name="imgpath"><br /><br />
	<input type="submit" name="submit">
</form>

<?php
include("template-bottom.php");
?>
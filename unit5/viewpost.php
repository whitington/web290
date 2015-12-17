<?php
include("template-top.php");

// using _REQUEST to make sure this works with get and post methods
$postid = $_REQUEST['postid'];
$sql = "SELECT * FROM posts WHERE post_id = $postid";

$result = mysql_query($sql);

$post = mysql_fetch_array($result);

$title = $post['post_title'];
$content = $post['post_content'];

echo "<h2>$title</h2>";
echo $content;

if(isset($_REQUEST['submit'])) {
	if($_REQUEST['comment'] == "") {
		// do nothing
	} else {
		// add comment to db table
		$comment = $_REQUEST['comment'];
		$userid = $_SESSION['userid'];
		
		$sql = "INSERT INTO comments (comment, userid, postid) 
		VALUES ('$comment', $userid, $postid)";
		
		$result = mysql_query($sql);
		
	}
}

$sql = "SELECT * FROM comments";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
	$comment = $row['comment'];
	echo "<p>$comment</p>";
}


if(isset($_SESSION['username'])) {
	if($_SESSION['username'] != "") {
?>
<form action="viewpost.php" method="POST">
	<br /><br />Tell us what you think...<br />
	<textarea name="comment" rows="5" cols="20"></textarea>
	<input type="hidden" name="postid" value="<?php echo $postid; ?>">
	<input type="submit" name="submit" value="Add Comment">
</form>
<?php
	}
}
include("template-bottom.php");
?>







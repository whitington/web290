<?php
include("template-top.php");

$postid = $_GET['postid'];
$sql = "SELECT * FROM posts WHERE post_id = $postid";

$result = mysql_query($sql);

$post = mysql_fetch_array($result);

$title = $post['post_title'];
$content = $post['post_content'];
$img = $post['imgpath'];

echo "<h2>$title</h2>";
echo $content;
echo "<img src=\"$img\">";

include("template-bottom.php");
?>
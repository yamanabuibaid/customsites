<?php
$story_likes_query = mysql_query("SELECT * FROM likes WHERE postid='$story_id'");
$story_likes = mysql_num_rows($story_likes_query);

$check_if_liked_query = mysql_query("SELECT * FROM likes WHERE postid='$story_id' AND userid='$my_user_id'");
$check_if_liked = mysql_num_rows($check_if_liked_query);
$check_if_disliked_query = mysql_query("SELECT * FROM dislikes WHERE postid='$story_id' AND userid='$my_user_id'");
$check_if_disliked = mysql_num_rows($check_if_disliked_query);
if($check_if_liked > 0){
	echo "<a href=\"index.php?like=".$story_id."\" id=\"vote\" class=\"vote vote-up voted\" data-id=\"".$story_id."\"></a>";
} else {
	echo "<a href=\"index.php?like=".$story_id."\" id=\"voteup\" class=\"vote vote-up\" data-id=\"".$story_id."\"></a>";
}
echo "<p class=\"rating\">".$rating."</p>";
if($check_if_disliked > 0){
	echo "<a href=\"index.php?dislike=".$story_id."\" class=\"vote vote-down voted\" data-id=\"".$story_id."\"></a>";
} else {
	echo "<a href=\"index.php?dislike=".$story_id."\" class=\"vote vote-down\" data-id=\"".$story_id."\"></a>";
}
//echo "<p>Likes: ".$story_likes."</a></p>";
//echo "<p>Dislikes: ".$story_dislikes."</a></p>";
?>
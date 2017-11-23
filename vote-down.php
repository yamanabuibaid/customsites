<?php
include('db.php');
include('functions.php');

$post_id = $_POST['postid'];
$posted_by_id = $_POST['posted_by_id'];

$check_if_liked = mysql_query("SELECT * FROM likes WHERE postid='$post_id' AND userid='$my_id'");
if(mysql_num_rows($check_if_liked) > 0){
	mysql_query("DELETE FROM likes WHERE userid='$my_id' AND postid='$post_id'");
}

$check_if_disliked = mysql_query("SELECT * FROM dislikes WHERE postid='$post_id' AND userid='$my_id'");
if(mysql_num_rows($check_if_disliked) > 0){
} else {
	mysql_query("INSERT INTO dislikes VALUES('','$my_id','$post_id','$posted_by_id')");
}
?>
<?php
include('db.php');
include('functions.php');

$post_id = $_POST['postid'];
$posted_by_id = $_POST['posted_by_id'];
mysql_query("DELETE FROM likes WHERE userid='$my_id' AND postid='$post_id'");

?>
<?php

session_start();

function loggedin(){
	if(isset($_SESSION['user_id']) or !empty($_SESSION['user_id'])){
		return true;
	} else {
		return false;
	}
}

if(loggedin()){
	$my_id = $_SESSION['user_id'];
	$my_query = mysql_query("SELECT * FROM users WHERE id='$my_id'");
	while($my = mysql_fetch_assoc($my_query)){
		$my_user_id = $my['id'];
		$my_username = $my['username'];
		$my_name = $my['name'];
		$my_email = $my['email'];
	}
	$my_upvotes_query = mysql_query("SELECT * FROM likes WHERE postedbyid='$my_id'");
	$my_upvotes = mysql_num_rows($my_upvotes_query);
	
	$my_downvotes_query = mysql_query("SELECT * FROM dislikes WHERE postedbyid='$my_id'");
	$my_downvotes = mysql_num_rows($my_downvotes_query);
	
	$my_rating = $my_upvotes - $my_downvotes;
	
	if($my_rating >= 100 && $my_rating < 1000){
		$my_level = 2;
	} elseif($my_rating >= 1000 && $my_rating < 10000){
		$my_level = 3;
	} elseif($my_rating >= 10000){
		$my_level = 4;
	} else {
		$my_level = 1;
	}
}
?>
<?php
	$check_exists_query = mysql_query("SELECT * FROM likes WHERE postid='$id' AND userid='$my_user_id'");
	$check_exists = mysql_num_rows($check_exists_query);
	
	$check_if_disliked_query = mysql_query("SELECT * FROM dislikes WHERE postid='$id' AND userid='$my_user_id'");
	$check_if_disliked = mysql_num_rows($check_if_disliked_query);
		
	if($check_if_disliked > 0){
		mysql_query("DELETE FROM dislikes WHERE userid='$my_id' AND postid='$id'");
		mysql_query("INSERT INTO likes VALUES('','$my_id','$id','$postedby_id')");
		echo "<p class=\"like-success\" id=\"message\">Liked!</p>";
	} else {
		if ($check_exists > 0) {
			echo "<p class=\"like-error\" id=\"message\">You've already liked this.</p>";
		} else {
			if($my_id == $postedby_id){
				echo "<p class=\"like-error\" id=\"message\">You can not like your own post!</p>";
			} else {
				mysql_query("INSERT INTO likes VALUES('','$my_id','$id','$postedby_id')");
				echo "<p class=\"like-success\" id=\"message\">Liked!</p>";
			}
		}
	}
?>
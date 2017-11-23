<?php
	include('db.php');
	include('functions.php');
?>


<?php
$post_id = $_GET['post_id'];
$story_query = mysql_query("SELECT * FROM stories WHERE id='$post_id' AND active='1' AND location_id='1'");
$story_run = mysql_fetch_assoc($story_query);
				$story_id = $story_run['id'];
				$story_post = $story_run['post'];
				$story_postedby_id = $story_run['userid'];
				
			
				$story_likes_query = mysql_query("SELECT * FROM likes WHERE postid='$story_id'");
				$story_likes = mysql_num_rows($story_likes_query);
				
				$story_dislikes_query = mysql_query("SELECT * FROM dislikes WHERE postid='$story_id'");
				$story_dislikes = mysql_num_rows($story_dislikes_query);
				
		
				$rating = $story_likes - $story_dislikes;
					
				$check_if_liked_query = mysql_query("SELECT * FROM likes WHERE postid='$story_id' AND userid='$my_user_id'");
				$check_if_liked = mysql_num_rows($check_if_liked_query);
				
				$check_if_disliked_query = mysql_query("SELECT * FROM dislikes WHERE postid='$story_id' AND userid='$my_user_id'");
				$check_if_disliked = mysql_num_rows($check_if_disliked_query);
				
				$story_postedby_upvotes_query = mysql_query("SELECT * FROM likes WHERE postedbyid='$story_postedby_id'");
				$story_postedby_upvotes = mysql_num_rows($story_postedby_upvotes_query);
				
				$story_postedby_downvotes_query = mysql_query("SELECT * FROM dislikes WHERE postedbyid='$story_postedby_id'");
				$story_postedby_downvotes = mysql_num_rows($story_postedby_downvotes_query);
				

?>


<?php
				echo "<div class=\"vote-info\">";
				
				if($check_if_liked > 0){
					echo "<a href=\"javascript:void(0);\" id=\"voteup\" onclick=\"unvoteUpPost(this);\" class=\"vote vote-up voted\" data-id=\"".$story_id."\" data-by=\"".$story_postedby_id."\"></a>";
				} else {
				echo "<a href=\"javascript:void(0);\" id=\"voteup\" onclick=\"voteUpPost(this);\" class=\"vote vote-up\" data-id=\"".$story_id."\" data-by=\"".$story_postedby_id."\"></a>";
				}
				
				echo "<p class=\"rating\">".$rating."</p>";
				
				if($check_if_disliked > 0){
					echo "<a href=\"javascript:void(0);\" onclick=\"unvoteDownPost(this);\" class=\"vote vote-down voted\" data-id=\"".$story_id."\" data-by=\"".$story_postedby_id."\"></a>";
				} else {
					echo "<a href=\"javascript:void(0);\" onclick=\"voteDownPost(this);\" class=\"vote vote-down\" data-id=\"".$story_id."\" data-by=\"".$story_postedby_id."\"></a>";
				}
				
				echo "</div>";
?>
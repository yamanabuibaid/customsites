			<?php
				$story_id = $story_run['id'];
				$story_post = $story_run['post'];
				$story_place_id = $story_run['place'];
				$story_postedby_id = $story_run['userid'];
				$story_date = $story_run['date'];
				$time = strtotime($story_date);
				
				$story_postedby_username_query = mysql_query("SELECT * FROM users WHERE id='$story_postedby_id'");
				$story_postedby_username_run = mysql_fetch_assoc($story_postedby_username_query);
				$story_postedby_username = $story_postedby_username_run['username'];
		
				$story_likes_query = mysql_query("SELECT * FROM likes WHERE postid='$story_id'");
				$story_likes = mysql_num_rows($story_likes_query);
				
				$story_dislikes_query = mysql_query("SELECT * FROM dislikes WHERE postid='$story_id'");
				$story_dislikes = mysql_num_rows($story_dislikes_query);
				
				$story_place_query = mysql_query("SELECT * FROM places WHERE id='$story_place_id'");
				$story_place_run = mysql_fetch_assoc($story_place_query);
				$story_place = $story_place_run['place'];
				
				$rating = $story_likes - $story_dislikes;
					
				$check_if_liked_query = mysql_query("SELECT * FROM likes WHERE postid='$story_id' AND userid='$my_user_id'");
				$check_if_liked = mysql_num_rows($check_if_liked_query);
				
				$check_if_disliked_query = mysql_query("SELECT * FROM dislikes WHERE postid='$story_id' AND userid='$my_user_id'");
				$check_if_disliked = mysql_num_rows($check_if_disliked_query);
				
				$story_postedby_upvotes_query = mysql_query("SELECT * FROM likes WHERE postedbyid='$story_postedby_id'");
				$story_postedby_upvotes = mysql_num_rows($story_postedby_upvotes_query);
				
				$story_postedby_downvotes_query = mysql_query("SELECT * FROM dislikes WHERE postedbyid='$story_postedby_id'");
				$story_postedby_downvotes = mysql_num_rows($story_postedby_downvotes_query);
				
				$story_postedby_rating = $story_postedby_upvotes - $my_downvotes;
				
				
				if($story_postedby_rating >= 100 && $story_postedby_rating < 1000){
					$story_postedby_level = 2;
				} elseif($story_postedby_rating >= 1000 && $story_postedby_rating < 10000){
					$story_postedby_level = 3;
				} elseif($story_postedby_rating >= 10000){
					$story_postedby_level = 4;
				} else {
					$story_postedby_level = 1;
				}
				
				
				echo "<div class=\"post-box\" id=\"".$story_id."\">";
				if($my_id == $story_postedby_id){
				//echo "<div class=\"edit-post-btn\" onclick=\"deletePostPopUp()\">x</div>";
				}
				echo "<div class=\"post-text\"><div class=\"quote-start\"></div><p>".$story_post."</p><div class=\"quote-end\"></div></div>";
				//echo "<p><a href=\"javascript:void(0)\" onclick=\"like".$story_id."()\">Like</a></p>";
				echo "<div class=\"vote-info\">";
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
				echo "</div>";
				echo "<div class=\"post-bottom-row\">";
				echo "<div class=\"post-info\">
					<img src=\"images/clock-red.png\" class=\"clock\">
						<span data-tooltip=\"".$story_date."\">".humanTiming($time)." ago</span>
					</div>";
				echo "Spotted at ".$story_place."";
				echo "<div class=\"posted_by_username\">posted by <a href=\"profile.php?u=".$story_postedby_username."\">".$story_postedby_username."</a>";
				if($story_postedby_level == 2){
					echo "<div class=\"post-level-badge badge-blue\">".$story_postedby_level."</div>";
				} elseif($story_postedby_level == 3){
					echo "<div class=\"post-level-badge badge-red\">".$story_postedby_level."</div>";
				} elseif($story_postedby_level == 4){
					echo "<div class=\"post-level-badge badge-black\">".$story_postedby_level."</div>";
				} else {
					echo "<div class=\"post-level-badge badge-green\" data-tooltip=\"Level ".$story_postedby_level."\">".$story_postedby_level."</div>";
				}
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "<div class=\"user_post_card\">";
				echo "<p>".$story_postedby_username."</p>";
				echo "</div>";
			?>
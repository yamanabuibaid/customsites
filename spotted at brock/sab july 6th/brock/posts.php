<?php
	include('db.php');
	include('functions.php');
?>

<?php
	$story_query = mysql_query("SELECT * FROM stories WHERE active='1' ORDER BY id DESC LIMIT 4");
	$updated_total_posts_query = mysql_query("SELECT * from stories");
	$updated_total_posts = mysql_num_rows($updated_total_posts_query);
	$new_posts = $updated_total_posts - $_SESSION['current_total_posts'];
	if($new_posts > 0){
		echo "<p class=\"new-posts-notifier\">".$new_posts." new story has been posted. <a href=\"#\" onclick=\"refreshPostsDiv()\">Click here to update this page</a>.</p>";
	} elseif($new_posts > 1){
		echo "<p class=\"new-posts-notifier\">".$new_posts." new stories have been posted. <a href=\"#\" onclick=\"refreshPostsDiv()\">Click here to update this page</a>.</p>";
	}
	function humanTiming ($time)
			{

				$time = time() - $time; // to get the time since that moment

				$tokens = array (
					31536000 => 'year',
					2592000 => 'month',
					604800 => 'week',
					86400 => 'day',
					3600 => 'hour',
					60 => 'minute',
					1 => 'second'
				);

				foreach ($tokens as $unit => $text) {
					if ($time < $unit) continue;
					$numberOfUnits = floor($time / $unit);
					return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
				}

			}
			while($story_run = mysql_fetch_assoc($story_query)){
				include('fetch-post-requirements.php');	
			}
			
	include('720x90-ad.php');
	
	$second_story_query = mysql_query("SELECT * FROM stories WHERE active='1' ORDER BY id DESC LIMIT 3 OFFSET 4");
			while($story_run = mysql_fetch_assoc($second_story_query)){
				include('fetch-post-requirements.php');	
			}
?>
			<center><div class="load-more_btn"><a href="#" style="color:#000;">Load more</a></div></center>
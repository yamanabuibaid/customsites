<?php
	include('db.php');
	include('functions.php');
	$location_posts_id = 1;
?>

<?php
	if(isset($_GET['s'])){
		$s = $_GET['s'];
		if($s == 'up-votes'){
			echo '<h1>UP VOTES</h1>';
		} else if($s == 'down-votes'){
			echo '<h1>DOWN VOTES</h1>';
		} if($s == 'place'){
			echo '<h1>PLACE</h1>';
		}
	} else {
		$story_query = mysql_query("SELECT * FROM stories WHERE active='1' AND location_id='$location_posts_id' ORDER BY id DESC LIMIT 4");
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
	?>
	<?php
	$second_story_query = mysql_query("SELECT * FROM stories WHERE active='1' AND location_id='$location_posts_id' ORDER BY id DESC LIMIT 3 OFFSET 4");
			while($story_run = mysql_fetch_assoc($second_story_query)){
				include('fetch-post-requirements.php');	
			}
?>
			<center><div class="load-more_btn"><a href="#" style="color:#000;">Load more</a></div></center>
<?php
include('header.php');
if(!loggedin()){
	header('login.php');
}
if(isset($_GET['u'])){
	$profile_user_username = $_GET['u'];
	$profile_user_id_query = mysql_query("SELECT * FROM users WHERE username='$profile_user_username'");
		while($profile_user_id_run = mysql_fetch_assoc($profile_user_id_query)){
			$profile_user_name = $profile_user_id_run['name'];
			$profile_user_id = $profile_user_id_run['id'];
		}
	$profile_post_count_query = mysql_query("SELECT * FROM stories WHERE userid='$profile_user_id'");
	$profile_post_count = mysql_num_rows($profile_post_count_query);
	$fetch_profile_user_query = mysql_query("SELECT * FROM users WHERE username='$profile_user_username'");
}
?>
</head>
<body>
	<?php include('loader.php'); ?>
	<?php include('nav.php'); ?>
	<div class="container pg-start-content">
		<?php include('sidebar.php');?>
		<div class="content">
			<h1><?php echo $profile_user_name;?></h1>
			<?php if($profile_post_count == 0){?>
			<span style="
    text-align: center;
    width: 100%;
    display: block;
">
  <center>
<?php if($profile_user_username == $my_username){?>
	<p style="font-size: 24px;">You haven't posted anything yet...</p>
<?php } else {?>
	<p style="font-size: 24px;"><?php echo $profile_user_name;?> hasn't posted anything yet...</p>
<?php } ?>

<div style="
    background-color: rgb(239, 186, 186);
    width: 227px;
    height: 100%;
    border-radius: 318px;
    padding: 18px;
"><div style="
    width: 112px;
    background: url('images/people/people_male_sad_trans.gif') no-repeat;
    height: 221px;
    background-size: 112px;
"></div></div>

<?php if($profile_user_username == $my_username){?>
<p style="font-size: 24px;">Post something now?</p>
<?php }?>
  </center>
		</span>
		<?php }?>
		<?php
		$profile_num_likes_query = mysql_query("SELECT * FROM likes WHERE postedbyid='$profile_user_id'");
		$profile_num_likes = mysql_num_rows($profile_num_likes_query);
		echo $profile_num_likes;
		?>
		<span>
		<?php 
			$story_query = mysql_query("SELECT * FROM stories WHERE active='1' AND userid='$profile_user_id' ORDER BY id DESC LIMIT 4");
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
		?>
		</span>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>
<script>
function showSortBy(){
	document.getElementById("arrow-sortby").style.transform = "rotate(90deg)";
	document.getElementById("sortBy").onclick = hideSortBy();
}

function hideSortBy(){
}

function showPlaces(){
	document.getElementById("arrow-places").style.transform = "rotate(90deg)";
}
</script>
<div class="side-bar">
	<div class="navigation-box-top">YOUR PROFILE</div>
	<div class="dashboard">
		<img src="https://media-members.nationalgeographic.com/static-media/images/css_images/nationalGeographic_default_avatar.jpg" class="dashboard-dp-img">
		<a href="profile.php?u=<?php echo $my_username;?>" class="user_name"><?php echo $my_name;?></a>
		<a href="javascript:void(0)" onclick="showLevelInfo()" class="your_level">Level <?php echo $my_level;?></a>
	</div>
	<div class="navigation-box-top">NAVIGATION</div>
	<div class="navigation-box-bottom">
		<li class="li-input">
			<input type="text" name="search" placeholder="Search...">
		</li>
			<li class="li-list" id="sortBy">
				<div class="top top-sortby">
					<p class="arrow rotate2" id="arrow-sortby">&gt;</p>
					Sort by
				</div>
				<ul id="sub-sortby" class="sub">
					<a href="#"><li>Most Recent</li></a>
					<a href="#"><li>Oldest</li></a>
					<a href="#"><li>Most Popular</li></a>
					<a href="#"><li>Most Disliked</li></a>
				</ul>
			</li>
			
			<li class="li-list" id="place">
				<div class="top top-place">
					<p class="arrow rotate2" id="arrow-place">&gt;</p>
					Place
				</div>
				<ul id="sub-place" class="sub">
				<?php
				$fetch_places_query = mysql_query("SELECT * FROM places");
				while($fetch_row = mysql_fetch_assoc($fetch_places_query)){
					$place_id = $fetch_row['id'];
					$place_name = $fetch_row['place'];
					echo '<a href="place.php?id='.$place_id.'"><li>'.$place_name.'</li></a>';
				}
				?>
				</ul>
			</li>


		
	</div>
	<div class="navigation-box-top">BLOG</div>
	<div class="navigation-box-bottom">
		<div class="blog">
			<?php
			$blog_query = mysql_query("SELECT * FROM blog LIMIT 10");
			while($blog_run = mysql_fetch_assoc($blog_query)){
				$blog_title = $blog_run['title']; 
				$blog_text = $blog_run['text']; 
				$blog_date = $blog_run['date']; 
					echo "<p class=\"blog-title\">".$blog_title."</p>";
					echo "<p>".$blog_text."</p>";
			}
			?>
	  </div>
	</div>
</div>
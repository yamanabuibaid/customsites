<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CollegeHub - The social network for students</title>
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
.location-text{
	color: black !important;
}
</style>
	<div class="top-index-none">
		<div class="container">
			<h1 class="big-title">Welcome to CollegeHub.</h1>
			<p>Select your university/college</p>
			<p class="select-uni">
				<?php		
					$location_query = mysql_query("SELECT * FROM locations");
					while($run_locations = mysql_fetch_assoc($location_query)){
						$location_id = $run_locations['id'];
						$location_name = ucfirst($run_locations['name']);
						$location_name_end = ucfirst($run_locations['name_end']);
						echo "<a href=\"select_location.php?id=".$location_id."\" class=\"location-text\">".$location_name." ".$location_name_end."</a> | ";
					}
				?>
			</p>
		</div>
	</div>
</body>
</html>
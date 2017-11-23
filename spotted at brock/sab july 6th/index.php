<!DOCTYPE html>
<html>
<head>
	<title>CollegeHub - The social network for students</title>
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if(isset($_COOKIE['location'])){
	if($_COOKIE['location'] == 'brock'){
		header('location: brock/index.php');
	} elseif($_COOKIE['location'] == 'niagara'){
		header('location: niagara/index.php');
	}
} else {
	include('choose-location.php');
}
?>
</body>
</html>
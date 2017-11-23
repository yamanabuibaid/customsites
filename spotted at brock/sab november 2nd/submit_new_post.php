<?php
include('db.php');
include('functions.php');


$text_to_post = htmlentities($_POST['text_to_post']);
$place = htmlentities($_POST['place']);
$date = date("F j, Y, g:i:s a");
$location_id = $_COOKIE['location_id']; 
$anonymous = $_POST['anonymous'];
if(empty($text_to_post)){
} else {
	mysql_query("INSERT INTO stories VALUES ('','$text_to_post','$place','$my_user_id','1','$anonymous','1','$date')");
}
?>
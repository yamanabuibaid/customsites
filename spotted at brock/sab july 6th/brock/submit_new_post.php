<?php
include('db.php');
include('functions.php');


$text_to_post = $_POST['text_to_post'];
$place = $_POST['place'];
$date = date("F j, Y, g:i:s a"); 
if(empty($text_to_post)){
} else {
	mysql_query("INSERT INTO stories VALUES ('','$text_to_post','$place','$my_user_id','1','$date')");
}
?>
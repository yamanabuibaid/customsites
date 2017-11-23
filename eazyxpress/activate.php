<?php

include('db.php');
include('functions.php');


if(isset($_GET['a_id'])){
	$a_id = $_GET['a_id'];
	$a_id_query = mysql_query("SELECT * FROM users WHERE activation_code='$a_id'");
	if(mysql_num_rows($a_id_query) == 1){
		$user_row = mysql_fetch_assoc($a_id_query);
		$id = $user_row['id'];
		$activated = $user_row['activated'];
		if($activated == 1){
			header('location:index.php?a_activated');
		} else {
			$_SESSION['user_id'] = $id;
			mysql_query("UPDATE users SET activated='1' WHERE id='$id'");
			header('location:index.php?activated');
		}
	} else {
		header('location:index.php?invalid_a_id');
	}
}
?>
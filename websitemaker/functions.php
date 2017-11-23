<?php

session_start();

function loggedin(){
	if(isset($_SESSION['user_id']) or !empty ($_SESSION['user_id'])){
		return true;
	} else {
		return false;
	}
}

if(loggedin()){
	$session_id = $_SESSION['user_id'];
	$run_user_query = mysql_query("SELECT * FROM users WHERE id='$session_id'");
	while($run_user = mysql_fetch_assoc($run_user_query)){
		$session_name = $run_user['name'];
		$session_email = $run_user['email'];
		$session_password = $run_user['password'];
		$session_activated = $run_user['activated'];
	}
}
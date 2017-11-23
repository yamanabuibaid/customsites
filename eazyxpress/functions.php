<?php

session_start();

function loggedin(){
	if(isset($_SESSION['user_id'])){
		return true;
	} else {
		return false;
	}
}

if(loggedin()){
	$my_id = $_SESSION['user_id'];
	$session_query = mysql_query("SELECT * FROM users WHERE id='$my_id'");
		while($run_session = mysql_fetch_assoc($session_query)){
			$ses_id = $run_session['id'];
			$ses_name = $run_session['name'];
			$ses_email = $run_session['email'];
			$ses_activated = $run_session['activated'];
			$ses_address = $run_session['address'];
			$ses_city = $run_session['city'];
			$ses_province = $run_session['province'];
			$ses_postal = $run_session['postal'];
			$ses_date_joined = $run_session['date_joined'];
		}
}
?>
<?php
	include('db.php');
	include('functions.php');
	
	session_destroy();
	
	if(isset($_GET['expired'])){
		header('location: signin.php?expired');
	} else {
		header('location: index.php');
	}
?>
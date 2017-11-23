<?php
include('db.php');
	if(isset($_POST['submit'])){
		$post = $_POST['post'];
		$date = date("F j, Y, g:i a"); 
		mysql_query("INSERT INTO stories VALUES('','$post','','','1','$date')");
		echo "done";
	}
?>
<?php
include('db.php');
include('functions.php');


$site_id = $_POST['siteid'];

mysql_query("DELETE FROM sites WHERE id='$site_id'"); 
mysql_query("DELETE FROM pages WHERE siteid='$site_id'"); 
?>
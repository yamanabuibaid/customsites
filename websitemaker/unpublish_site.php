<?php
include('db.php');
include('functions.php');


$site_id = $_POST['siteid'];
mysql_query("UPDATE sites SET published='0' WHERE id='$site_id'"); 
?>
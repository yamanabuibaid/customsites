<?php
include('db.php');
include('functions.php');


$page_id = $_POST['pageid'];

mysql_query("DELETE FROM pages WHERE id='$page_id'"); 
?>
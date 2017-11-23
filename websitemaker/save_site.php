<?php
include('db.php');
include('functions.php');

$site_content = $_POST['sitecontent'];
$site_content = str_replace("'","\'",$site_content);
$site_content = str_replace("contenteditable=\"true\"","",$site_content);
$site_content = str_replace("contenteditable=\"false\"","",$site_content);
$site_id = $_POST['siteid'];
mysql_query("UPDATE sites SET content_code='$site_content' WHERE id='$site_id'");
?>
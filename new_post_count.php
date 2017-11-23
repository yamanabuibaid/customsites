<?php
include('db.php');
include('functions.php');

$new_total_posts_query = mysql_query("SELECT * from stories");
$new_total_posts = mysql_num_rows($new_total_posts_query);
echo $new_total_posts;
?>
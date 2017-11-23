<?php
	@mysql_connect('localhost','root','yaman123') or die ('Could not connect to database');
	@mysql_select_db('websitemaker') or die ("Database doesn't exist.");
?>
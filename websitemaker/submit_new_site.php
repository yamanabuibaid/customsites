<?php
include('db.php');
include('functions.php');

if(isset($_POST['submit_new_site'])){
	$site_title = $_POST['site_title'];
	$site_title = str_replace("'","\'",$site_title);
	$site_title = htmlentities($site_title);
	$site_type = $_COOKIE['sitetype'];
	$site_template = $_COOKIE['sitetemplate'];
	$default_css_code_query = mysql_query("SELECT * FROM templates WHERE type='$site_type' AND template='$site_template'");
		while($row = mysql_fetch_assoc($default_css_code_query)){
			$default_css_code = $row['css_code'];
			$default_css_code = str_replace("'","\'",$default_css_code);
			$default_content_code = $row['content_code'];
			$default_content_code = str_replace("'","\'",$default_content_code);
		}
	$rn_1 = mt_rand(0,9);
	$rn_2 = mt_rand(0,9);
	$rn_3 = mt_rand(0,9);
	$rn_4 = mt_rand(0,9);
	$rn_5 = mt_rand(0,9);
	$rn_6 = mt_rand(0,9);
	$rn_7 = mt_rand(0,9);
	$rn_8 = mt_rand(0,9);
	$rn_9 = mt_rand(0,9);
	$temp_id = $rn_1 . $rn_2 . $rn_3 . $rn_4 .$rn_5 . $rn_6 . $rn_7 . $rn_8 . $rn_9;
	$check_if_tempid_exists = mysql_query("SELECT * FROM sites WHERE tempid='$temp_id'");
	if(mysql_num_rows($check_if_tempid_exists) > 0){
		$rn_1 = mt_rand(0,9);
		$rn_2 = mt_rand(0,9);
		$rn_3 = mt_rand(0,9);
		$rn_4 = mt_rand(0,9);
		$rn_5 = mt_rand(0,9);
		$rn_6 = mt_rand(0,9);
		$rn_7 = mt_rand(0,9);
		$rn_8 = mt_rand(0,9);
		$rn_9 = mt_rand(0,9);
		$temp_id = $rn_1 . $rn_2 . $rn_3 . $rn_4 .$rn_5 . $rn_6 . $rn_7 . $rn_8 . $rn_9;
	}
	mysql_query("INSERT INTO sites VALUES('','$temp_id','$session_id','$site_template','0','0','$site_title','$site_type','','$default_css_code','$default_content_code')");
	$check_new_site_id = mysql_query("SELECT * FROM sites WHERE tempid='$temp_id'");
	while($run_check_nsi = mysql_fetch_assoc($check_new_site_id)){
		$new_site_id = $run_check_nsi['id'];
		mysql_query("INSERT INTO pages VALUES('','$new_site_id','home','index')");
	}
	header('location:edit-site.php?s='.$temp_id.'&newsite');
} else {
	header('location:index.php');
}
?>
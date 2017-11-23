<?php include('header.php'); ?>
<?php
if(isset($_GET['s'])){
	$site_temp_id = $_GET['s'];
	$run_site_query = mysql_query("SELECT * FROM sites WHERE tempid='$site_temp_id'");
	while($run_site = mysql_fetch_assoc($run_site_query)){
		$site_id = $run_site['id'];
		$user_id = $run_site['userid'];
		$template = $run_site['template'];
		$published = $run_site['published'];
		$removed_copyright = $run_site['removed_copyright'];
		$title = $run_site['title'];
		$type = $run_site['type'];
		$url = $run_site['url'];
		$published = $run_site['published'];
		$css_code = $run_site['css_code'];
		$content_code = $run_site['content_code'];
	}
	?>
	<title><?php echo $title;?></title>
	<style>
		<?php echo $css_code;?>
	</style>
</head>
<body>
<?php if($published == 1){?>
			<?php 
				echo str_replace("[[title]]","$title",$content_code);
				if($removed_copyright != 1){
					include('copyright-footer.php'); 
				}
			?>
<?php } else {?>
	<p>Sorry, this website hasn't been published yet!</p>
<?php } ?>
</body>
<?php } ?>
<?php include('header.php'); ?>
<?php
if(isset($_GET['id'])){
	$template_id = $_GET['id'];
	$run_template_query = mysql_query("SELECT * FROM templates WHERE id='$template_id'");
	while($run_site = mysql_fetch_assoc($run_template_query)){
		$name = $run_site['name'];
		$css_code = $run_site['css_code'];
		$by = $run_site['by'];
		$content_code = $run_site['content_code'];
		$title = $name . " By " . $by;
	}
	?>
	<title><?php echo $title;?></title>
	<style>
		<?php echo $css_code;?>
	</style>
</head>
<body>
			<?php 
				echo str_replace("[[title]]",ucfirst($name),$content_code);
			?>
</body>
<?php } ?>
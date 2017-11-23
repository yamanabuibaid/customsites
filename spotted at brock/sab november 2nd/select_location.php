<?php
	ob_start();
	include('db.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$_SESSION['location_id'] = $id;
	?>
	<script type="text/javascript">
		document.cookie="location_id=<?php echo $id;?>; expires=Thu, 18 Dec 2020 12:00:00 UTC";
		window.location = 'index.php';
	</script>
	<?php
	}
?>
<?php
$title = "Services - EazyXPress";
include('header.php');
if(!isset($_GET['s'])){
	header('location: services.php?s=1');
}
$service_id = $_GET['s'];
?>
<div class="pg_services">
	<div class="pg_title">
		<div class="container">
			<p>Services</p>
		</div>
	</div>
	<div class="container">
		<div style="margin: 20px 0;">
			<div class="left-side-navigation">
			<?php
				$services_query = mysql_query("SELECT * FROM services");
				while($run = mysql_fetch_assoc($services_query)){
					$service['id'] = $run['id'];
					$service['title'] = $run['title'];
					$service['description'] = $run['description']; ?>
				<a href="services.php?s=<?php echo $service['id'];?>"><li data-id="<?php echo $service['id']; ?>"><?php echo $service['title']; ?></li></a>
				<?php }
			?>
			</div>
			<div class="right-side-service">
			<?php
			$services_info_query = mysql_query("SELECT * FROM services WHERE id='$service_id'");
			while($run_services_info = mysql_fetch_assoc($services_info_query)){
				$service_id = $run_services_info['id'];
				$service_title = $run_services_info['title'];
				$service_description = $run_services_info['description'];
				echo "<p class=\"s_service_title\">".$service_title."</p>";
				echo "<p class=\"s_service_description\">".$service_description."</p>";
			}
			?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$("[data-id='<?php echo $service_id;?>']").addClass('active');
</script>
<?php
include('footer.php');
?>
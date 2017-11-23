<?php
if(isset($_GET['tn'])){
	$title = "Tracking Number ".$_GET['tn'] . " - EazyXPress";
}
include('header.php');
date_default_timezone_set('MST');
?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.ptTimeSelect.css" />
	<script type="text/javascript" src="jquery.ptTimeSelect.js"></script>
<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker();
  });
	$(document).ready(function(){
        $('input[name="delivered_by_time"]').ptTimeSelect();
	});
</script>
</script>
<div class="pgcontent pg_place-order">
	<div class="pg_title">
		<div class="container">
			<center>
				<p style="display: inline-block;">Tracking Number</p>
				<form method="GET" action="tn.php" style="display: inline-block;">
					<?php if(isset($_GET['tn'])){
						$tracking_number = $_GET['tn'];?>
						<input type="text" name="tn" class="input_tracking-number" maxlength="6" value="<?php echo $tracking_number;?>">
					<?php } else {?>
						<input type="text" name="tn" class="input_tracking-number" maxlength="6" placeholder="Enter #">
					<?php }?>
					<input type="submit" class="input_tracking-number_submit">
				</form>
			</center>
		</div>
	</div>
	<div class="look-up_tracking-number_info">
		<div class="container">
			<?php if(isset($_GET['tn'])){
				$tracking_number = $_GET['tn'];
				$order_run_query = mysql_query("SELECT * FROM orders WHERE tracking_number='$tracking_number'");
				$order_run_exist = mysql_num_rows($order_run_query);
				if($order_run_exist == 1){
					while($order_run = mysql_fetch_assoc($order_run_query)){
					$name = $order_run['name'];
					$address = $order_run['address'];
					$city = $order_run['city'];
					$province = $order_run['province'];
					$postal = $order_run['postal'];
					$service_type = $order_run['service_type'];
					$delivered_by = $order_run['delivered_by'];
					$order_placed = $order_run['order_placed'];
					$status = $order_run['status'];?>
					<p>Status:<?php echo $status; ?></p>
					<p>Date Placed: <?php echo $order_placed; ?></p>
					<p>Delivering to: <?php echo $address .",". $city .",". $province ." ". $postal ; ?></p>
					<p>Service Type: <?php echo $service_type;?></p>
					<p>Needs to be delivered by: <?php echo $delivered_by;?></p>
				<?php }
				} else { ?>
					<div class="error-div">
						<div class="circle-msg error-msg">
							<p class="error-text">!</p>
						</div>
						<p class="msg-text"><b>Error</b>: this tracking number doesn't exist. Please check for any mistakes in your search.</p>
					</div>
				<?php }
			}?>
		</div>
	</div>
<?php
include('footer.php');
?>
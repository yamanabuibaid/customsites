<?php
$title = "My Orders- EasyXpress";
include('header.php');
if(!loggedin()){
	header('location:signin.php');
}
?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery.ptTimeSelect.css" />
	<script type="text/javascript" src="jquery.ptTimeSelect.js"></script>
	<div class="pgcontent pg_my-orders">
		<div class="pg_title">
			<div class="container">
				<p class="p-title">My Orders</p>
				<p class="p-small-text">View all the orders made on this account, as well as all the information about the order.</p>
			</div>
		</div>
		<div class="container">
		<table class="myorders-table">
			<tr class="top-info-bar"><td>Tracking Number</td><td>Status</td><td>Shipping Information</td><td>Description</td><td>Pieces</td><td>Weight</td><td>Dimensions</td><td>Additional Info</td><td>Date Placed</td><td>Print</td></tr>
		<?php 
			$orders_query = mysql_query("SELECT * FROM orders WHERE userid='$ses_id' ORDER BY id DESC");
			while($order = mysql_fetch_assoc($orders_query)){
				$order_id = $order['id'];
				$order_tracking_number = $order['tracking_number'];
				$order_name = $order['name'];
				$order_address = $order['address'];
				$order_city = $order['city'];
				$order_province = $order['province'];
				$order_postal = $order['postal'];
				$order_description = $order['description'];
				$order_pieces = $order['pieces'];
				$order_weight = $order['weight'];
				$order_dimensions = $order['dimensions'];
				$order_additional_info = $order['additional_info'];
				$order_status = $order['status'];
				$order_placed = $order['order_placed'];
				echo "
				<tr style=\"text-align: center;\"><td>".$order_tracking_number."</td><td>".$order_status."</td><td>".$order_name."<br>".$order_address."<br>".$order_city."</td><td>".$order_description."</td><td>".$order_pieces."</td><td>".$order_weight."</td><td>".$order_dimensions."</td><td>".$order_additional_info."</td><td>".$order_placed."</td><td><a target=\"_blank\" href=\"print.php?tn=".$order_tracking_number."\">Print</a></td></tr>
				";
			}
		?>
		</table>
	</div>
<script type="text/javascript">
	$( ".myorders-table tr:odd" ).css( "background-color", "#bbbbff" );
</script>
<?php
include('footer.php');
?>
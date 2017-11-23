<?php
$title = "Advanced Search - EazyXPress";
include('header.php');
?>
<div class="pg_advanced-search">
	<div class="pg_title">
		<div class="container">
			<p class="p-title">Advanced Search</p>
			<p class="p-small-text">Search for an order by address, company name, deliver to address and more.</p>
		</div>
	</div>
	<div class="container">
		<?php if(isset($_GET['shipper_address'])){
			$shipper_address = $_GET['shipper_address'];
			$shipper_address_query = mysql_query("SELECT * FROM orders WHERE address='$shipper_address'");
			while($run = mysql_fetch_assoc($shipper_address_query)){
				$id = $run['id'];
				$name = $run['name'];
				echo $id. $name .'<br>';
			}
		}?>
		<p class="construction-error">Sorry, this part of the website is still under construction!</p>
	</div>
</div>
<?php
include('footer.php');
?>
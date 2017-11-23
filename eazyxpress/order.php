<?php
$title = "Place an Order - EazyXPress";
include('header.php');
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
<?php if(isset($_GET['placed'])){
	if(isset($_POST['submit_place-order-final'])){
					$tracking_num_1 = mt_rand(0,9);
					$tracking_num_2 = mt_rand(0,9);
					$tracking_num_3 = mt_rand(0,9);
					$tracking_num_4 = mt_rand(0,9);
					$tracking_num_5 = mt_rand(0,9);
					$tracking_num_6 = mt_rand(0,9);
					$tracking_number = $tracking_num_1 . $tracking_num_2 . $tracking_num_3 . $tracking_num_4 . $tracking_num_5 . $tracking_num_6;
					$tracking_num_query = mysql_query("SELECT * FROM orders WHERE tracking_number='$tracking_number'");
					$tracking_num_exists = mysql_num_rows($tracking_num_query);
					if($tracking_num_exists == 1){
						$tracking_num_7 = mt_rand(0,9);
						$tracking_num_8 = mt_rand(0,9);
						$tracking_num_9 = mt_rand(0,9);
						$tracking_num_10 = mt_rand(0,9);
						$tracking_num_11 = mt_rand(0,9);
						$tracking_num_12 = mt_rand(0,9);
						$tracking_number = $tracking_num_7 . $tracking_num_8 . $tracking_num_9 . $tracking_num_10 . $tracking_num_11 . $tracking_num_12;
					}
					$_SESSION['tracking_number'] = $tracking_number;
					$name = $_SESSION['name'];
					$phone_number = $_SESSION['phone_number'];
					$address = $_SESSION['address'];
					$city = $_SESSION['city'];
					$province = $_SESSION['province'];
					$postal = $_SESSION['postal'];
					$delivery_name = $_SESSION['delivery_name'];
					$delivery_phone_number = $_SESSION['delivery_phone_number'];
					$delivery_address = $_SESSION['delivery_address'];
					$delivery_city = $_SESSION['delivery_city'];
					$delivery_province = $_SESSION['delivery_province'];
					$delivery_postal = $_SESSION['delivery_postal'];
					$insurance = $_SESSION['delivery_postal'];
					$description = $_SESSION['description'];
					$pieces = $_SESSION['pieces'];
					$weight = $_SESSION['weight'];
					$dimensions = $_SESSION['dimensions'];
					$service_type = $_SESSION['service_type'];
					$delivered_by = $_SESSION['delivered_by_date'].' '.$_SESSION['delivered_by_time'];
					$additonal_info = $_SESSION['additonal_info'];
					$current_date_time = date("F j, Y, g:i a"); 
					
					mysql_query("INSERT INTO orders VALUES('','$tracking_number','$my_id','$name','$address','$city','$province','$postal','$delivery_name','$delivery_address','$delivery_city','$delivery_province','$delivery_postal','$delivery_phone_number','$phone_number','$insurance','$description','$pieces','$weight','$dimensions','$service_type','$delivered_by','$additonal_info','','$current_date_time')");
					header('location:order.php?placed&_tn='.$tracking_number.'');
				}
				if(isset($_GET['_tn'])){
					$_tn = $_GET['_tn'];
					?>
				<div class="container">
					<div class="order-success-div">
						<p style="font-size: 22px;">Order has been submitted.</p>
						<p>Your tracking number is <b><?php echo $_tn;?></b>. <br>To complete your order, please print <b>three</b> copies: a shipper copy, courier copy, and consignee copy.</p>
						<a href="print.php?tn=<?php echo $_tn;?>"><div class="btn_print-form">Print</div></a>
					</div>
				</div>
				<?php } else {?>
					<div class="container">
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text">An unexpected error has occured.</p>
						</div>
					</div>
				<?php } ?>
<?php }  else {
?>
<div class="pgcontent pg_place-order">
	<div class="pg_title">
		<div class="container">
			<p>Place an Order.</p>
		</div>
	</div>
	<div id="above-step-bar"></div>
	<div class="container">
		<?php if(!loggedin()){?>
			<div class="error-div">
				<div class="circle-msg error-msg">
					<p class="error-text">!</p>
				</div>
				<p class="msg-text">Please login to place an order</p>
			</div>
		<?php } else { ?>
			<div class="order-steps-bar">
			<?php 
			if(isset($_GET['step'])){
				$step = $_GET['step'];?>
					
					
				<?php if($step == '2'){?>
				<a href="order.php?step=1&back#above-step-bar">
					<div class="_step very-left">
						<div class="left-side-title">
							<p>Pick up information</p>
						</div>
					</div>
				</a>
				
				<div class="_step active">
					<div class="left-side-title">
						<p>Deliver to information</p>
					</div>
				</div>
				<div class="_step">
					<div class="left-side-title">
						<p>Package information</p>
					</div>
				</div>	
				
						
				
				<div class="_step very-right">
					<div class="left-side-title">
						<p>Confirm</p>
					</div>
				</div>	
					<?php } elseif($step == '3'){?>
				<a href="order.php?step=1&back#above-step-bar">
				<div class="_step very-left">
					<div class="left-side-title">
						<p>Pick up information</p>
					</div>
				</div>
				</a>
				
				<a href="order.php?step=2&back#above-step-bar">
				<div class="_step" style="margin-left: -4px;">
					<div class="left-side-title">
						<p>Deliver to information</p>
					</div>
				</div>
				</a>
				<div class="_step active">
					<div class="left-side-title">
						<p>Package information</p>
					</div>
				</div>	
				
						
				
				<div class="_step very-right">
					<div class="left-side-title">
						<p>Confirm</p>
					</div>
				</div>	
					<?php } elseif($step == '4'){?>
				<div class="_step very-left">
					<div class="left-side-title">
						<p>Pick up information</p>
					</div>
				</div>
				
				<div class="_step" style="    margin-left: -3px;">
					<div class="left-side-title">
						<p>Deliver to information</p>
					</div>
				</div>
				<div class="_step" style="margin-left: -4px;">
					<div class="left-side-title">
						<p>Package information</p>
					</div>
				</div>	
				
						
				
				<div class="_step very-right active">
					<div class="left-side-title">
						<p>Confirm</p>
					</div>
				</div>	
					<?php } else {?>
				<div class="_step very-left active">
					<div class="left-side-title">
						<p>Pick up information</p>
					</div>
				</div>
				
				<div class="_step">
					<div class="left-side-title">
						<p>Deliver to information</p>
					</div>
				</div>
				<div class="_step">
					<div class="left-side-title">
						<p>Package information</p>
					</div>
				</div>	
				
						
				
				<div class="_step very-right">
					<div class="left-side-title">
						<p>Confirm</p>
					</div>
				</div>	
					<?php }?>
					
			<?php 
			} else {?>
			<div class="_step very-left active">
					<div class="left-side-title">
						<p>Pick up information</p>
					</div>
				</div>
				
				<div class="_step">
					<div class="left-side-title">
						<p>Deliver to information</p>
					</div>
				</div>
				<div class="_step">
					<div class="left-side-title">
						<p>Package information</p>
					</div>
				</div>	
				
						
				
				<div class="_step very-right">
					<div class="left-side-title">
						<p>Confirm</p>
					</div>
				</div>
			<?php
			} ?>
			</div>
			
			<?php 
			if(isset($_GET['step'])){
				$step = $_GET['step'];
				
				if($step == '2'){?>
				<?php
					if(isset($_POST['submit_step-1'])){
						$_SESSION['name'] = htmlentities($_POST['name']);
						$_SESSION['phone_number'] = htmlentities($_POST['phone_number']);
						$_SESSION['address'] = htmlentities($_POST['address']);
						$_SESSION['city'] = htmlentities($_POST['city']);
						$_SESSION['province'] = htmlentities($_POST['province']);
						$_SESSION['postal'] = htmlentities($_POST['postal']);
					}
				?>
				<?php if(isset($_GET['back'])){?>
				<form method="post" action="order.php?step=3&back#above-step-bar" class="place-order_form">
					<p class="order-section-title">Deliver to information</p>
					<div class="input-table">
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to name or company name</p>
							<input type="text" name="delivery_name" value="<?php echo $_SESSION['delivery_name'];?>" class="input_place-order" placeholder="Full name or Company name" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to phone number</p>
							<input type="text" class="input_place-order" placeholder="Phone Number" value="<?php echo $_SESSION['delivery_phone_number'];?>" name="delivery_phone_number" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to address</p>
							<input type="text" class="input_place-order" name="delivery_address" value="<?php echo $_SESSION['delivery_address'];?>" placeholder="Address (Deliver To)" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to city</p>
							<input type="text" class="input_place-order" name="delivery_city" value="<?php echo $_SESSION['delivery_city'];?>" placeholder="City" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to province</p>
							<select class="input_place-order delivery_province" name="delivery_province" required>
								<option value="Alberta">Alberta</option>
								<option value="British Columbia">British Columbia</option>
								<option value="Saskatchewan">Saskatchewan</option>
								<option value="Manitoba">Manitoba</option>
								<option value="Ontario">Ontario</option>
								<option value="Quebec">Quebec</option>
								<option value="Nova Scotia">Nova Scotia</option>
								<option value="Prince Edward Island">Prince Edward Island</option>
								<option value="New Brunswick">New Brunswick</option>
								<option value="Newfoundland">Newfoundland</option>
								<option value="Yukon">Yukon</option>
								<option value="Northwest Territories">Northwest Territories</option>
								<option value="Nunavut">Nunavut</option>
							</select>
							<script type="text/javascript">
								$('.delivery_province option[value="<?php echo $_SESSION['delivery_province'];?>"]').attr("selected", "selected");
							</script>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to postal code</p>
							<input type="text" maxlength="6" name="delivery_postal" value="<?php echo $_SESSION['delivery_postal'];?>" class="input_place-order input_postal-code" placeholder="Postal Code (optional)"/>
						</div>
					</div>
					<a href="order.php?step=1&back#above-step-bar"><div class="input_place-order back_btn">BACK</div></a>
					<input type="submit" name="submit_step-2" value="NEXT" class="input_place-order btn_submit">
				</form>
				<?php } else {?>
				<form method="post" action="order.php?step=3#above-step-bar" class="place-order_form">
					<p class="order-section-title">Deliver to information</p>
					<div class="input-table">
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to name or company name</p>
							<input type="text" name="delivery_name" class="input_place-order" placeholder="Full name or Company name" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to phone number</p>
							<input type="text" class="input_place-order" placeholder="Phone Number" name="delivery_phone_number" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to address</p>
							<input type="text" class="input_place-order" name="delivery_address" placeholder="Address (Deliver To)" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to city</p>
							<input type="text" class="input_place-order" name="delivery_city" placeholder="City" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Shipper province (Pick up province)</p>
							<select class="input_place-order" name="delivery_province" required>
								<option value="Alberta">Alberta</option>
								<option value="British Columbia">British Columbia</option>
								<option value="Saskatchewan">Saskatchewan</option>
								<option value="Manitoba">Manitoba</option>
								<option value="Ontario">Ontario</option>
								<option value="Quebec">Quebec</option>
								<option value="Nova Scotia">Nova Scotia</option>
								<option value="Prince Edward Island">Prince Edward Island</option>
								<option value="New Brunswick">New Brunswick</option>
								<option value="Newfoundland">Newfoundland</option>
								<option value="Yukon">Yukon</option>
								<option value="Northwest Territories">Northwest Territories</option>
								<option value="Nunavut">Nunavut</option>
							</select>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Deliver to postal code</p>
							<input type="text" maxlength="6" name="delivery_postal" class="input_place-order input_postal-code" placeholder="Postal Code (optional)"/>
						</div>
					</div>
					<a href="order.php?step=1&back#above-step-bar"><div class="input_place-order back_btn">BACK</div></a>
					<input type="submit" name="submit_step-2" value="NEXT" class="input_place-order btn_submit">
				</form>
				<?php } ?>
				<?php } else if($step == '3'){
				
					if(isset($_POST['submit_step-2'])){
						$_SESSION['delivery_name'] = htmlentities($_POST['delivery_name']);
						$_SESSION['delivery_address'] = htmlentities($_POST['delivery_address']);
						$_SESSION['delivery_city'] = htmlentities($_POST['delivery_city']);
						$_SESSION['delivery_province'] = htmlentities($_POST['delivery_province']);
						$_SESSION['delivery_postal'] = htmlentities($_POST['delivery_postal']);
						$_SESSION['delivery_phone_number'] = htmlentities($_POST['delivery_phone_number']);
					} ?>
				<?php if(isset($_GET['back'])){ ?>
					
					
				<form method="post" action="order.php?step=4#above-step-bar" class="place-order_form">
					<p class="order-section-title">Package information</p>
					<div class="input-table">
						<div class="input-row">
							<p class="table-left-side-input-desc">Description of package. Example; hot, heavy, big.</p>
							<input type="text" name="description" class="input_place-order" placeholder="Description of Package" value="<?php echo $_SESSION['description'];?>" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Number of pieces</p>
							<input type="text" name="pieces" class="input_place-order" placeholder="Pieces" value="<?php echo $_SESSION['pieces'];?>" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Weight</p>
							<input style="width: 264px;" type="text" name="weight" class="input_place-order" placeholder="Weight" value="<?php echo $_SESSION['weight_1'];?>" required />
							<select style="width: 122px;" class="input_place-order weight_unit" name="weight_2">
								<option>lbs</option>
								<option>kg</option>
								<option>g</option>
							</select>
							<script type="text/javascript">
								$('.weight_unit option[value="<?php echo $_SESSION['weight_2'];?>"]').attr("selected", "selected");
							</script>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Dimensions</p>
							<input type="text" name="dimensions" class="input_place-order" placeholder="Dimensions (l x w x h)" value="<?php echo $_SESSION['dimensions'];?>"/>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Service type</p>
							<select class="input_place-order select-service-type" name="service_type" required="required" />
								<option value="Regular">Regular</option>
								<option value="Rush">Rush</option>
								<option value="Direct Drive">Direct Drive</option>
							</select>
							<script type="text/javascript">
								$('.select-service-type option[value="<?php echo $_SESSION['service_type'];?>"]').attr("selected", "selected");
							</script>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Ready by (date)</p>
							<input type="text" name="delivered_by_date" id="datepicker" class="input_place-order" placeholder="Ready By Date" required value="<?php echo $_SESSION['delivered_by_date'];?>"/>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Ready by (time)</p>
							<input type="text" name="delivered_by_time" class="input_place-order" placeholder="Ready By Time" required value="<?php echo $_SESSION['delivered_by_time'];?>"/>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Insurance</p>
							<select class="input_place-order select-insurance-option" name="insurance" required="required">
								<option value="No" selected>Insurance (Optional)</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<script type="text/javascript">
								$('.select-insurance-option option[value="<?php echo $_SESSION['insurance'];?>"]').attr("selected", "selected");
							</script>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc" style="margin: 12px 0;">Additional notes</p>
							<textarea class="input_place-order" name="additional" style="margin: 0px 0px 8px; width: 100%; height: 110px;resize:none;" placeholder="Additional Notes" value="<?php echo $_SESSION['additonal_info'];?>"></textarea>
						</div>
					</div>
					<a href="order.php?step=2&back#above-step-bar"><div class="input_place-order back_btn">BACK</div></a>
					<input type="submit" name="submit_step-3" value="NEXT" class="input_place-order btn_submit">
				</form>	
					
					
					
				<?php } else { ?>
				<form method="post" action="order.php?step=4#above-step-bar" class="place-order_form">
					<p class="order-section-title">Package information</p>
					<div class="input-table">
						<div class="input-row">
							<p class="table-left-side-input-desc">Description of package. Example; hot, heavy, big.</p>
							<input type="text" name="description" class="input_place-order" placeholder="Description of Package" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Number of pieces</p>
							<input type="text" name="pieces" class="input_place-order" placeholder="Pieces" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Weight</p>
							<input style="width: 264px;" type="text" name="weight" class="input_place-order" placeholder="Weight" required />
							<select style="width: 122px;" class="input_place-order" name="weight_2">
								<option>lbs</option>
								<option>kg</option>
								<option>g</option>
							</select>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Dimensions</p>
							<input type="text" name="dimensions" class="input_place-order" placeholder="Dimensions (l x w x h)"/>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Service type</p>
							<select class="input_place-order" name="service_type" required="required" />
								<option value="Regular">Regular</option>
								<option value="Rush">Rush</option>
								<option value="Direct Drive">Direct Drive</option>
							</select>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Ready by (date)</p>
							<input type="text" name="delivered_by_date" id="datepicker" class="input_place-order" placeholder="Ready By Date" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Ready by (time)</p>
							<input type="text" name="delivered_by_time" class="input_place-order" placeholder="Ready By Time" required />
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc">Insurance</p>
							<select class="input_place-order" name="insurance" required="required">
								<option value="No" selected>Insurance (Optional)</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
						<div class="input-row">
							<p class="table-left-side-input-desc" style="margin: 12px 0;">Additional notes</p>
							<textarea class="input_place-order" name="additional" style="margin: 0px 0px 8px; width: 100%; height: 110px;resize:none;" placeholder="Additional Notes"></textarea>
						</div>
					</div>
					<a href="order.php?step=2&back#above-step-bar"><div class="input_place-order back_btn">BACK</div></a>
					<input type="submit" name="submit_step-3" value="NEXT" class="input_place-order btn_submit">
				</form>
				<?php } ?>
				<?php } else if($step == '4'){
					if(isset($_POST['submit_step-3'])){
						$_SESSION['description'] = htmlentities($_POST['description']);
						$_SESSION['pieces'] = htmlentities($_POST['pieces']);
						$_SESSION['weight_1'] = htmlentities($_POST['weight']);
						$weight_1 = $_SESSION['weight_1'];
						$_SESSION['weight_2'] = htmlentities($_POST['weight_2']);
						$weight_2 = $_SESSION['weight_2'];
						$_SESSION['weight'] = $weight_1 .' '.$weight_2;
						$_SESSION['dimensions'] = htmlentities($_POST['dimensions']);
						$_SESSION['service_type'] = htmlentities($_POST['service_type']);
						$_SESSION['delivered_by_date'] = htmlentities($_POST['delivered_by_date']);
						$_SESSION['delivered_by_time'] = htmlentities($_POST['delivered_by_time']);
						$_SESSION['delivered_by'] = $_SESSION['delivered_by_date'] .", ". 	$_SESSION['delivered_by_time'];
						$_SESSION['additonal_info'] = htmlentities($_POST['additional']);
						$_SESSION['insurance'] = htmlentities($_POST['insurance']);
					} ?>
					<table style="width: 100%;font-family: arial;margin: 35px 0px;">
						<tr style="font-size: 23px; font-weight: 600;">
							<td style="width: 33.3%;">Pick up From</td>
							<td style="width: 33.3%;">Deliver to</td>
							<td style="width: 33.3%;">Package Information</td>
						</tr>
						<tr>
							<td><?php echo ucwords($_SESSION['name']); ?></br><?php echo $_SESSION['phone_number'];?></br><?php echo ucwords($_SESSION['address']); ?></br><?php echo ucwords($_SESSION['city']); ?>, <?php echo ucwords($_SESSION['province']); ?>, <?php echo strtoupper($_SESSION['postal']); ?></br><?php echo $_SESSION['delivered_by']; ?></td>
							<td><?php echo ucwords($_SESSION['delivery_name']); ?></br><?php echo $_SESSION['delivery_phone_number'];?></br><?php echo ucwords($_SESSION['delivery_address']); ?></br><?php echo ucwords($_SESSION['delivery_city']); ?>, <?php echo ucwords($_SESSION['delivery_province']); ?>, <?php echo strtoupper($_SESSION['delivery_postal']); ?></td>
							<td><?php echo $_SESSION['description']; ?></br><?php echo $_SESSION['pieces']; ?> pieces</br><?php echo $_SESSION['weight'];?></br><?php echo $_SESSION['dimensions'];?></td>
						</tr>
					</table>
					<p class="disclaimer-title">Disclaimer:</p>
					<textarea style="margin: 0px; width: 100%; resize: none;margin-bottom:10px;height:100px;" disabled>EazyXPress is not and will not be liable for shipment damages caused by improper packaging. Compensation of $0.50 CAD per pound will automatically apply in case of loss of shipments during transportation. Additional insurance can be purchased for shipments of a value up to $25,000 CAD, at a cost of $1.00 CAD for every $200 CAD declared. For more information about additional insurance, please contacts us or leave a note in the space provided above. Any claims have to be submitted within one (1) week of receiving shipment.</textarea>
					<form method="post" action="order.php?placed">
						<a href="order.php?step=3&back#above-step-bar"><div class="input_place-order back_btn">BACK</div></a>
						<input type="submit" name="submit_place-order-final" value="Submit &amp; Print" class="input_place-order btn_submit">
					</form>
				<?php } else if($step == '1'){ ?>
					<?php if(isset($_GET['back'])){
					?>
					<form method="post" action="order.php?step=2&back&next#above-step-bar" class="place-order_form">
						<p class="order-section-title">Pick Up Information</p>
						<div class="input-table">
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's name or company name</p>
								<input type="text" name="name" class="input_place-order" placeholder="Full name or Company name" value="<?php echo $_SESSION['name'];?>" required="">
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's phone number</p>
								<input type="text" class="input_place-order" name="phone_number" value="<?php echo $_SESSION['phone_number'];?>" placeholder="Phone Number" required />
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's address (pick up address)</p>
								<input type="text" class="input_place-order" name="address" value="<?php echo $_SESSION['address'];?>" placeholder="Address (Deliver To)" required />
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's City (pick up city)</p>
								<input type="text" class="input_place-order" name="city" placeholder="City" value="<?php echo $_SESSION['city'];?>" required />
							</div>
							<div class="input-row">
							<script type="text/javascript">
								$('.table-left-side-input-desc" option[value="<?php echo $_SESSION['province'];?>"]').attr("selected", "selected");
							</script>
								<p class="table-left-side-input-desc">Shipper province (Pick up province)</p>
								<select class="input_place-order" name="province" required>
									<option value="Alberta">Alberta</option>
									<option value="British Columbia">British Columbia</option>
									<option value="Saskatchewan">Saskatchewan</option>
									<option value="Manitoba">Manitoba</option>
									<option value="Ontario">Ontario</option>
									<option value="Quebec">Quebec</option>
									<option value="Nova Scotia">Nova Scotia</option>
									<option value="Prince Edward Island">Prince Edward Island</option>
									<option value="New Brunswick">New Brunswick</option>
									<option value="Newfoundland">Newfoundland</option>
									<option value="Yukon">Yukon</option>
									<option value="Northwest Territories">Northwest Territories</option>
									<option value="Nunavut">Nunavut</option>
								</select>
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper postal code (Pick up postal code)</p>
								<input type="text" maxlength="6" name="postal" class="input_place-order input_postal-code" value="<?php echo $_SESSION['postal'];?>" placeholder="Postal Code (optional)"/>
							</div>
						</div>
						<input type="submit" name="submit_step-1" value="NEXT" style="width: 100%;" class="input_place-order btn_submit">
					</form>
					<?php } else {?>
					<form method="post" action="order.php?step=2#above-step-bar" class="place-order_form">
						<p class="order-section-title">Pick Up Information</p>
						<div class="input-table">
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's name or company name</p>
								<input type="text" name="name" class="input_place-order" placeholder="Full name or Company name" required="">
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's phone number</p>
								<input type="text" class="input_place-order" name="phone_number" placeholder="Phone Number" required />
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's address (pick up address)</p>
								<input type="text" class="input_place-order" name="address" placeholder="Address (Deliver To)" required />
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper's City (pick up city)</p>
								<input type="text" class="input_place-order" name="city" placeholder="City" required />
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper province (Pick up province)</p>
								<select class="input_place-order" name="province" required>
									<option value="Alberta">Alberta</option>
									<option value="British Columbia">British Columbia</option>
									<option value="Saskatchewan">Saskatchewan</option>
									<option value="Manitoba">Manitoba</option>
									<option value="Ontario">Ontario</option>
									<option value="Quebec">Quebec</option>
									<option value="Nova Scotia">Nova Scotia</option>
									<option value="Prince Edward Island">Prince Edward Island</option>
									<option value="New Brunswick">New Brunswick</option>
									<option value="Newfoundland">Newfoundland</option>
									<option value="Yukon">Yukon</option>
									<option value="Northwest Territories">Northwest Territories</option>
									<option value="Nunavut">Nunavut</option>
								</select>
							</div>
							<div class="input-row">
								<p class="table-left-side-input-desc">Shipper postal code (Pick up postal code)</p>
								<input type="text" maxlength="6" name="postal" class="input_place-order input_postal-code" placeholder="Postal Code (optional)"/>
							</div>
						</div>
						<input type="submit" name="submit_step-1" value="NEXT" style="width: 100%;" class="input_place-order btn_submit">
					</form>
					<?php } ?>
				
				<?php } ?>
			<?php } else { ?>
			<form method="post" action="order.php?step=2#above-step-bar" class="place-order_form">
			<p class="order-section-title">Pick Up Information</p>
			<div class="input-table">
				<div class="input-row">
					<p class="table-left-side-input-desc">Shipper's name or company name</p>
					<input type="text" name="name" class="input_place-order" placeholder="Full name or Company name" required="">
				</div>
				<div class="input-row">
					<p class="table-left-side-input-desc">Shipper's phone number</p>
					<input type="text" class="input_place-order" name="phone_number" placeholder="Phone Number" required />
				</div>
				<div class="input-row">
					<p class="table-left-side-input-desc">Shipper's address (pick up address)</p>
					<input type="text" class="input_place-order" name="address" placeholder="Address (Deliver To)" required />
				</div>
				<div class="input-row">
					<p class="table-left-side-input-desc">Shipper's City (pick up city)</p>
					<input type="text" class="input_place-order" name="city" placeholder="City" required />
				</div>
				<div class="input-row">
					<p class="table-left-side-input-desc">Shipper province (Pick up province)</p>
					<select class="input_place-order" name="province" required>
						<option value="Alberta">Alberta</option>
						<option value="British Columbia">British Columbia</option>
						<option value="Saskatchewan">Saskatchewan</option>
						<option value="Manitoba">Manitoba</option>
						<option value="Ontario">Ontario</option>
						<option value="Quebec">Quebec</option>
						<option value="Nova Scotia">Nova Scotia</option>
						<option value="Prince Edward Island">Prince Edward Island</option>
						<option value="New Brunswick">New Brunswick</option>
						<option value="Newfoundland">Newfoundland</option>
						<option value="Yukon">Yukon</option>
						<option value="Northwest Territories">Northwest Territories</option>
						<option value="Nunavut">Nunavut</option>
					</select>
				</div>
				<div class="input-row">
					<p class="table-left-side-input-desc">Shipper postal code (Pick up postal code)</p>
					<input type="text" maxlength="6" name="postal" class="input_place-order input_postal-code" placeholder="Postal Code (optional)"/>
				</div>
			</div>
			<input type="submit" name="submit_step-1" value="NEXT" class="input_place-order btn_submit" style="width: 100%;">
			</form>
			<?php } ?>
		<?php } ?>
		
	</div>
</div>
<?php } ?>
<?php
include('footer.php');
?>
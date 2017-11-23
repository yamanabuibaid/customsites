<?php
	include('../db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>EazyXPress Admin Panel</title>
<link rel="stylesheet" href="style.css"/>
<link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
<script src="../jquery/jquery.min.js"></script>
<script type="text/javascript">
function getURLParameter(name) {
	return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}
</script>
<script>
	function activateSettings(){
		$('ul#settings').toggleClass('active');
		$('#settings_li .arrow-right-dropdown').toggleClass('active');
	}
	function activateCreate(){
		$('ul#create').toggleClass('active');
		$('#create_li .arrow-right-dropdown').toggleClass('active');
	}
</script>
</head>
<body>
<div class="header">
		<div class="container">
			<a href="index.php">
				<img class="logo-name" src="../images/logos/logo-horizontal.png" alt="EazyXPress">
			</a>
			<div class="nav-bar">
				<p class="welcome-right">Welcome, Yaman Abuibaid</p>
			</div>
		</div>
</div>
	<div class="page-div">
	<div class="sidebar">
		<a href="index.php?p=dashboard"><li>Dashboard</li></a>
		<li onclick="activateCreate();" id="create_li">Create<p class="arrow-right-dropdown">></p></li>
		<ul class="ul_dropdown" id="create">
			<a href="index.php?p=create&s=order_1"><li>Order</li></a>
			<a href="index.php?p=create&s=order_2"><li>Interval Order</li></a>
			<a href="index.php?p=create&s=service"><li>Service</li></a>
			<a href="index.php?p=create&s=account_1"><li>Customer Account</li></a>
			<a href="index.php?p=create&s=account_2"><li>Admin Account</li></a>
		</ul>
		<a href="index.php?p=users"><li>Users</li></a>
		<a href="index.php?p=orders"><li>Orders</li></a>
		<a href="index.php?p=services"><li>Services</li></a>
		<a href="index.php?p=pages"><li>Pages</li></a>
		<a href="index.php?p=newsletter"><li>Send a newsletter</li></a>
		<li onclick="activateSettings();" id="settings_li">Settings<p class="arrow-right-dropdown">&gt;</p></li>
		<ul class="ul_dropdown" id="settings">
		<a href="index.php?p=settings&s=web_text"><li>Website Text</li></a>
			<li>Staff Accounts</li>
		</ul>
	</div>
	<div class="content-right-side">
		
<?php 
if(isset($_GET['p'])){
	$p = $_GET['p'];
	if($p == 'dashboard'){
		$orders_query = mysql_query("SELECT * FROM orders");
		$orders_num = mysql_num_rows($orders_query);
		$users_query = mysql_query("SELECT * FROM users");
		$users_num = mysql_num_rows($users_query);
		?>
		<div class="content-side-top">
			<p>Dashboard</p>
		</div>
		<div class="content-side">
			<div class="stat-blocks">
				<div class="block">
					<p class="number">5</p>
					<p class="name">Orders today</p>
				</div>
				<div class="block">
					<p class="number"><?php echo $orders_num; ?></p>
					<p class="name">Total orders</p>
				</div>
				<div class="block">
					<p class="number">34</p>
					<p class="name">Users today</p>
				</div>
				<div class="block">
					<p class="number"><?php echo $users_num; ?></p>
					<p class="name">Total users</p>
				</div>
				
			</div>
		<div class="recent-table">
			<p class="top">Recent Orders</p>
			<div class="bottom">
				<table class="recent-orders-list">
					<tbody>
						<?php
						$recent_orders_query = mysql_query("SELECT * FROM orders ORDER BY id DESC LIMIT 10");
						while($run_recent_orders = mysql_fetch_assoc($recent_orders_query)){
							$id = $run_recent_orders['id'];
							$name = $run_recent_orders['name'];
							$delivery_name = $run_recent_orders['delivery_name'];?>
						<tr>
							<td><?php echo $name;?></td>
							<td class="arrow-to-right">→</td>
							<td><?php echo $delivery_name;?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<script type="text/javascript">
			//$(".recent-orders-list tr:odd").css( "background-color", "#bbbbff" );
			</script>
		</div>		
		<div class="recent-table">
			<p class="top">Recent Users</p>
			<div class="bottom"></div>
		</div>
	</div>
	</div>
	</div>
	<?php } elseif($p == 'users'){?>
		<div class="content-side-top">
			<p>Users</p>
		</div>
		<div class="content-side">
		<table>
			<tr>
				<td>Name</td>
				<td># of orders</td>
				<td>Email</td>
				<td>Date joined</td>
			</tr>
			<?php
				$users_query = mysql_query("SELECT * FROM users");
				while($run = mysql_fetch_assoc($users_query)){
					$id = $run['id'];
					$name = $run['name'];
					$email = $run['email'];
					$date_joined = $run['date_joined'];
					$num_orders_query = mysql_query("SELECT * FROM orders WHERE userid='$id'");
					$num_orders = mysql_num_rows($num_orders_query);
					?>
					<tr>
						<td><?php echo $name;?></td>
						<td><?php echo $num_orders;?></td>
						<td><?php echo $email;?></td>
						<td><?php echo $date_joined;?></td>
					</tr>
					<?php
				}
			?>
		</table>
	<?php } elseif($p == 'orders'){ ?>
		<div class="content-side-top">
			<p>Orders</p>
		</div>
		<div class="content-side">
	<table class="all-orders-table">
	<tr style="background-color: #D0D0D0;font-weight: 600;">
		<td>Tracking Number</td><td>Status</td><td>Shipper</td><td>Shipper Address</td><td>Delivery to</td><td>Deliver to Address</td><td>Package Information</td>
	</tr>
	<?php
		$orders_query = mysql_query("SELECT * FROM orders ORDER BY id DESC");
		while($run = mysql_fetch_assoc($orders_query)){
			$id = $run['id'];
			$tracking_number = $run['tracking_number'];
			$userid = $run['userid'];
			$status = $run['status'];
			$name = $run['name'];
			$address = $run['address'];
			$city = $run['city'];
			$province = $run['province'];
			$postal = $run['postal'];
			$phone_number = $run['phone_number'];
			$delivery_name = $run['delivery_name'];
			$delivery_address = $run['delivery_address'];
			$delivery_city = $run['delivery_city'];
			$delivery_province = $run['delivery_province'];
			$delivery_postal = $run['delivery_postal'];
			$delivery_phone_number = $run['delivery_phone_number'];
			$insurance = $run['insurance'];
			$pieces = $run['pieces'];
			$weight = $run['weight'];
			$dimensions = $run['dimensions'];
		?>
	<tr>
		<td><?php echo $tracking_number; ?></td><td><?php echo $status;?></td><td>Name: <b><?php echo $name; ?></b></br>Phone number: <b><?php echo $phone_number; ?></b></td><td>Address: <b><?php echo $address; ?></b></br>City <b><?php echo $city; ?></b></br>Province: <b><?php echo $province; ?></b></br>Postal: <b><?php echo $postal; ?></b></td><td>Name: <b><?php echo $delivery_name;?></b></br>Phone number: <b><?php echo $delivery_phone_number; ?></b></td><td>Address: <b><?php echo $delivery_address; ?></b></br>City <b><?php echo $delivery_city; ?></b></br>Province <b><?php echo $delivery_province; ?></b></br>Postal: <b><?php echo $delivery_postal; ?></b></td><td>Pieces: <b><?php echo $pieces;?></b></br>Weight: <b><?php echo $weight;?></b></br>Dimensions: <b><?php echo $dimensions;?></b></br></td>
	</tr>
		<?php } ?>
	</table>
	<script type="text/javascript">
		$(".all-orders-table tr:odd").css( "background-color", "#bbbbff" );
	</script>
	<?php } elseif($p == 'pages'){ ?>
	<div class="content-side-top">
			<p>Pages</p>
		</div>
		<div class="content-side">
	<?php } elseif($p == 'newsletter'){ ?>
	<div class="content-side-top">
			<p>Send a newsletter</p>
		</div>
		<div class="content-side">
	<form method="post">
	<?php
		$num_users_query = mysql_query("SELECT * FROM users");
		$num_users = mysql_num_rows($num_users_query);
		if(isset($_POST['submit_newsletter'])){
			$to = 'ifamousnow@gmail.com';
			$from_email = $_POST['from_email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$headers = 'From: <'.$from_email.'>' . "\r\n";
			mail($to,$subject,$message,$headers);
		}
	?>
		<select class="input1">
			<option value="all">All users (<?php echo $num_users;?> users)</option>
			<option value="orders">Users who have orders(<?php echo $num_users;?> users)</option>
			<option value="noorders">Users who have no orders(<?php echo $num_users;?> users)</option>
		</select>
		<br/>
		<select name="from_email" class="input1">
			<option value="no-reply@eazyxpress.ca">no-reply@eazyxpress.ca</option>
			<option value="contact@eazyxpress.ca">contact@eazyxpress.ca</option>
		</select>
		<br/>
		<input class="input1" type="text" name="subject" placeholder="Subject" required="required"/>
		<br/>
		<input class="input1" type="text" name="message" placeholder="Message" required="required"/>
		<br/>
		<input class="input1" type="submit" name="submit_newsletter" value="Send Emails"/>
	</form>
	<?php } elseif($p == 'settings'){ ?>
	<?php if(isset($_GET['s'])){
			$s_var = $_GET['s']; ?>
		<?php if($s_var == 'web_text'){?>
		<div class="content-side-top">
			<p>Edit website text</p>
		</div>
		<div class="content-side">
		<form method="post">
		<?php 
			if(isset($_POST['submit_edited-website-text'])){
				$wb_1 = $_POST['1_web_text'];
				mysql_query("UPDATE settings SET text='$wb_1' WHERE id='1'");
				$wb_2 = $_POST['2_web_text'];
				mysql_query("UPDATE settings SET text='$wb_2' WHERE id='2'");
				$wb_3 = $_POST['3_web_text'];
				mysql_query("UPDATE settings SET text='$wb_3' WHERE id='3'");
				$wb_4 = $_POST['4_web_text'];
				mysql_query("UPDATE settings SET text='$wb_4' WHERE id='4'");
				$wb_5 = $_POST['5_web_text'];
				mysql_query("UPDATE settings SET text='$wb_5' WHERE id='5'");
				$wb_6 = $_POST['6_web_text'];
				mysql_query("UPDATE settings SET text='$wb_6' WHERE id='6'");
				$wb_7 = $_POST['7_web_text'];
				mysql_query("UPDATE settings SET text='$wb_7' WHERE id='7'");
				$wb_8 = $_POST['8_web_text'];
				mysql_query("UPDATE settings SET text='$wb_8' WHERE id='8'");
				$wb_9 = $_POST['9_web_text'];
				mysql_query("UPDATE settings SET text='$wb_9' WHERE id='9'");
				$wb_10 = $_POST['10_web_text'];
				mysql_query("UPDATE settings SET text='$wb_10' WHERE id='10'");
				echo "<p>Succesfully edited.</p>";
			}?>
		<?php 
		$website_text_query = mysql_query("SELECT * FROM settings");
		while($run = mysql_fetch_assoc($website_text_query)){
			$wt_id = $run['id'];
			$wt_text = $run['text'];?>
		<input class="web_text_input" type="text" name="<?php echo $wt_id;?>_web_text" value="<?php echo $wt_text;?>"/>
		<br>
		<?php }
		?>
		<input type="submit" name="submit_edited-website-text"/>
		</form>
		<?php } elseif($s_var == 'order_2'){?>
		<div class="content-side-top">
			<p>Create an new interval order</p>
		</div>
		<div class="content-side">
		<?php } ?>
		<?php } ?>
	<?php } elseif($p == 'services'){?>
		<div class="content-side-top">
			<p>Services</p>
		</div>
		<div class="content-side">
		<?php if(isset($_GET['edit'])){
		$edit_id = $_GET['edit'];
		$edit_service_query = mysql_query("SELECT * FROM services WHERE id='$edit_id'");
		while($run = mysql_fetch_assoc($edit_service_query)){
			$title = $run['title'];
			$description = $run['description'];?>
			<form method="post" action="index.php?p=services&edited=<?php echo $edit_id;?>">
			<input type="text" name="new_title" value="<?php echo $title;?>"/>
			</br>
			<input type="text" name="new_description" value="<?php echo $description;?>"/>
			</br>
			<input type="submit" name="submit_edit_service" value="Edit"/>
			</form>
		<?php } ?>
		<?php } elseif(isset($_GET['delete'])){
		$delete_id = $_GET['delete'];
		if($delete_id  == 1 || $delete_id  == 2 || $delete_id == 3){
			echo "<p>You cannot delete this service.</p></p>";
		} else {
			mysql_query("DELETE FROM services WHERE id='$delete_id'");
			echo "<p>Service successfully deleted!</p>";
		}
		} else { ?>
		<?php if(isset($_GET['edited'])){
			$edited_id = $_GET['edited'];
			if(isset($_POST['submit_edit_service'])){
				$edited_title = $_POST['new_title'];
				$edited_description = $_POST['new_description'];
				mysql_query("UPDATE services SET title='$edited_title' , description='$edited_description' WHERE id='$edited_id'");
				echo "<p>Successfully edited!</p>";
			}
		}?>
		<table>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
			<?php
				$services_query = mysql_query("SELECT * FROM services");
				while($run = mysql_fetch_assoc($services_query)){
					$id = $run['id'];
					$title = $run['title'];
					$description = $run['description'];
				?>
					<tr>
						<td><?php echo $title;?></td>
						<td><?php echo $description;?></td>
						<td><a href="index.php?p=services&edit=<?php echo $id; ?>">Edit</a></td>
						<td><a href="index.php?p=services&delete=<?php echo $id; ?>">Delete</a></td>
					</tr>
					<?php
				}
			?>
		</table>
		<?php } ?>
	<?php } elseif($p == 'create'){?>
		<?php if(isset($_GET['s'])){
			$s_var = $_GET['s']; ?>
		<?php if($s_var == 'order_1'){?>
		<div class="content-side-top">
			<p>Create an new order</p>
		</div>
		<div class="content-side">
		<?php } elseif($s_var == 'order_2'){?>
		<div class="content-side-top">
			<p>Create an new interval order</p>
		</div>
		<div class="content-side">
		<?php } elseif($s_var == 'service'){?>
		<div class="content-side-top">
			<p>Create an new service</p>
		</div>
		<div class="content-side">
		<form method="post">
		<?php
		if(isset($_POST['new_service-submit'])){
			$new_service_title = $_POST['service-title'];
			$new_service_description = $_POST['service-description'];
			mysql_query("INSERT into services VALUES('','$new_service_title','$new_service_description')");
			echo "<p>Service successfully created!</p>";
		}
		?>
		<input type="text" name="service-title" class="" placeholder="Service title"/>
		<input type="text" name="service-description" class="" placeholder="Service description"/>
		<input type="submit" name="new_service-submit" class="" value="Create!"/>
		</form>
		<?php }?>
		<?php } ?>
	<?php } ?>
	</div>
	</div>
	
<?php } else {
	header('location:index.php?p=dashboard');
}?>
<script type="text/javascript">
	var contentHeight = $('.content-right-side').height();
	$('.sidebar').css({minHeight: contentHeight});
</script>
<script>
	var sidebarWidth = $('.sidebar').width();
	$('.content-right-side').css({width: 'calc(100% - ' + sidebarWidth + 'px)'});
</script>
</body>

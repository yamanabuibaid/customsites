<?php
	ob_start();
	include('db.php');
	include('functions.php');
	date_default_timezone_set('MST');
	if(loggedin()){
		if(!isset($ses_name)){
			header('location:logout.php?expired');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<meta name="description" content="description" />
<meta name="keywords" content="keywords" />
<meta name="author" content="EazyXPress">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="mobile-out.css"/>
<link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<script src="jquery/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function trackingNumber(){
		$('.tn-top-bar').toggleClass('active');
	}
	function mobileNav(){
		$('.mobile-navigation').toggleClass('active');
		$('body').toggleClass('active-mobile-nav');
		$('.nav-bar_dropdown').toggleClass('active');
	}
	function contactFooter(){
		$('.contact-footer').toggleClass('active');
		$('.contact-footer .circle').toggleClass('active');
		$('.contact-footer .clickable-div').toggleClass('active');
		$('html, body').animate({scrollTop:$(document).height()}, 'slow');
			return false;
	}
	function rotateLogo(){
		$('.logo-top').addClass('rotated');
		setTimeout(function(){
			$('.logo-top').removeClass('rotated');
		},500);
	}
</script>
</head>
<body>
<script>
rotateLogo();
</script>
	<div class="mobile-navigation">
	<a href="index.php"><li>Home</li>
	<a href="services.php"><li>Services</li>
	<a href="order.php"><li>Place Order</li>
	<a href="tn.php"><li>Search Tracking Number</li>
	<a href="index.php"><li>Advanced Search</li>
	<?php if(!loggedin()){?>
	<a href="signin.php"><li>Sign in</li>
	<a href="signup.php"><li>Sign up</li>
	<?php } else {?>
	<a href="logout.php"><li>Logout</li>
	<?php } ?>
	</div>
	<form method="GET" action="tn.php" id="input_tracking-number" class="">
		<center>
			<div class="tn-top-bar">
				<a href="javascript:void(0)" onclick="trackingNumber()" class="x-close_button">x</a>
				<input type="text" name="tn" maxlength="6" minlength="6" placeholder="Type here and press 'enter'" class="top-bar_text-field">
			</div>
		</center>
	</form>
	<div class="header">
		<div class="container">
			<div class="logo">
					<div class="logo-header-div" onmouseover="rotateLogo()">
						<center>
							<div class="img-logo logo-top"></div>
							<div class="img-logo"></div>
						</center>
					</div>
			</div>
			<div class="right-side_info">
				<div class="col phone">
					<p class="top-text">780-200-5190</p><p class="bottom-text">or 780-200-2520</p>
				</div>
				<div class="col">
					<a href="javascript:void(0);" class="btn_tn_click" onclick="trackingNumber()">Have a tracking number?</a>
				</div>
				<div class="col">
					<a href="adv-search.php" class="btn_adv_click">Advanced Search</a>
				</div>
			</div>
			<div class="right_angled_triangle">
			</div>
			<div class="nav_bar">
			<div class="right">
				<a href="index.php" class="link home mobile-name-a"><li class="mobile-name">EAZYXPRESS</li></a>
				<a href="index.php" class="link"><li class="">Home</li></a>
				<div class="dot"></div>
				<a href="services.php" class="link"><li class="">Services</li></a>
				<div class="dot"></div>
				<a href="order.php" class="link"><li class="">Place Order</li></a>
				<div class="dot"></div>
				<?php if(loggedin()){?>
					<a href="my-orders.php" class="link"><li>My Orders</li></a>
					<div class="dot"></div>
				<?php } ?>
				<a href="javascript:void(0)" class="link tracking-number-li"><li onclick="trackingNumber()">Search Tracking Number</li></a>
				<div class="dot tracking-number-dot"></div>
				<?php if(loggedin()){
				echo "<a href=\"logout.php\" class=\"link\"><li class=\"\">Logout</li></a>";
				} else {
				echo "<a href=\"signin.php\" class=\"link\"><li class=\"\">Sign in</li></a>";
				echo "<div class=\"dot\"></div>";
				echo "<a href=\"signup.php\" class=\"link\"><li class=\"\">Sign up</li></a>";
				}?>
				<div onclick="mobileNav();" class="nav-bar_dropdown">
					<div class="nav_bar-dp-bar"></div>
					<div class="nav_bar-dp-bar"></div>
					<div class="nav_bar-dp-bar"></div>
				</div>
			</div>
			</div>
		</div>
		<div class="nav_bar_bar">
			<div class="left"></div>
			<div class="right"></div>
		</div>
	</div>
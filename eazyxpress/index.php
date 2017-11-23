<?php
$title = "Home - EazyXPress";
include('header.php');
?>
<script type="text/javascript">
/*function coverPhoto_two(){
		document.getElementById("cover_photo").style.background = "url('https://demo.proteusthemes.com/cargopress/wp-content/uploads/sites/24/2015/04/xslider_1.jpg.pagespeed.ic.ffSMpLSXP6.webp') no-repeat";
		document.getElementById("cover_photo").style.backgroundSize = "1600px";
		document.getElementById("cover-one_title_one").style.color = "rgba(0,0,0,0)";
		document.getElementById("cover-one_title_two").style.color = "rgba(0,0,0,0)";
		document.getElementById("cover-one_description").style.color = "rgba(0,0,0,0)";
		setTimeout(function(){
			document.getElementById("cover-one_title_one").style.display = "none";
			document.getElementById("cover-one_title_two").style.display = "none";
			document.getElementById("cover-one_description").style.display = "none";
			document.getElementById("cover-two_title_one").style.display = "block";
			document.getElementById("cover-two_title_one").style.color = "rgb(214, 68, 68)";
			document.getElementById("cover-two_title_two").style.display = "block";
			document.getElementById("cover-two_title_two").style.color = "white";
			document.getElementById("cover-two_description").style.display = "block";
			document.getElementById("cover-two_description").style.color = "white";
		},3000);
		setTimeout(function() { coverPhoto_one(); }, 10000);
	};*/
function coverPhoto_one(){
	//document.getElementById("cover_photo").style.background = "url('http://www.freeimages.com/pic/l/i/ip/ipxstudios/1427546_55984226.jpg') no-repeat";
	//document.getElementById("cover_photo").style.backgroundSize = "1500px";
	//document.getElementById("cover-two_title_one").style.color = "rgba(0,0,0,0)";
	//document.getElementById("cover-two_title_two").style.color = "rgba(0,0,0,0)";
	//document.getElementById("cover-two_description").style.color = "rgba(0,0,0,0)";
	document.getElementById("cover_photo").style.backgroundPosition = "0 -20px";
	setTimeout(function(){
			//document.getElementById("cover-two_title_one").style.display = "none";
			//document.getElementById("cover-two_title_two").style.display = "none";
			//document.getElementById("cover-two_description").style.display = "none";
			//document.getElementById("cover-one_title_one").style.top = "20px";
	document.getElementById("cover-one_title_one").style.display = "block";
	document.getElementById("cover-one_title_one").style.color = "rgb(214, 68, 68)";
	document.getElementById("cover-one_title_two").style.marginTop = "5px";
	document.getElementById("cover-one_title_two").style.display = "block";
	document.getElementById("cover-one_title_two").style.color = "rgb(65, 65, 65)";
	document.getElementById("cover-one_description").style.display = "block";
		},3000);
	setTimeout(function(){
		document.getElementById("cover-one_description").style.color = "white";
	},5000);
};
setTimeout(function(){ coverPhoto_one();}, 100);
</script>
<?php
if(isset($_GET['a_activated'])){
	echo "
	<script type=\"text/javascript\">
		function closePopup(){
			document.getElementById(\"white-popup\").style.display = \"none\";
			document.getElementById(\"black-overlay\").style.display = \"none\";
		}
	</script>";
	echo "<div class=\"black-overlay\" id=\"black-overlay\"></div>";
	echo "<div class=\"white-popup\" id=\"white-popup\"><button onclick=\"closePopup();\" class=\"close-popup-btn\">x</button><p>Account has already been activated.</p></div>";
} elseif(isset($_GET['invalid_a_id'])){
		echo "
	<script type=\"text/javascript\">
		function closePopup(){
			document.getElementById(\"white-popup\").style.display = \"none\";
			document.getElementById(\"black-overlay\").style.display = \"none\";
		}
	</script>";
	echo "<div class=\"black-overlay\" id=\"black-overlay\"></div>";
	echo "<div class=\"white-popup\" id=\"white-popup\" ><button onclick=\"closePopup();\" class=\"close-popup-btn\">x</button><p>Invalid activation ID.</p></div>";
} elseif(isset($_GET['activated'])){
		echo "
	<script type=\"text/javascript\">
		function closePopup(){
			document.getElementById(\"white-popup\").style.display = \"none\";
			document.getElementById(\"black-overlay\").style.display = \"none\";
		}
	</script>";
	echo "<div class=\"black-overlay\" id=\"black-overlay\"></div>";
	echo "<div class=\"white-popup\" id=\"white-popup\" ><button onclick=\"closePopup();\" class=\"close-popup-btn\">x</button><p>Account has been successfully activated. <br> You are now logged in.</p></div>";
}
?>
<div class="index_one" id="cover_photo">
	<div class="container">
	<?php
		$setting_query = mysql_query("SELECT * FROM settings ORDER BY id DESC");
		while($setting_run = mysql_fetch_assoc($setting_query)){
			$id = $setting_run['id'];
			$text_text = $setting_run['text'];
			$text[$id] = $text_text;
		}
	?>
		<p class="title_one" id="cover-one_title_one"><?php echo $text['1']; ?></p>
		<p class="title_two" id="cover-one_title_two"><?php echo $text['2']; ?></p>
		<p class="description" id="cover-one_description"><?php echo $text['3']; ?></p>	
	</div>
</div>
<div class="index_layer-1">
	<div class="container">
		<h2><?php echo $text['4']; ?></h2>
		<p></p>
	</div>
	<div class="img-truck"></div>
	<div class="img-packages"></div>
	<div class="pointA"></div>
	<div class="pointB"></div>
</div>
<script type="text/javascript">
	function truckAnimation1(){
		$('.index_layer-1 .img-truck').addClass('goToPointA');
		setTimeout(function(){
			truckAnimation2();
		},3000)
	};	
	function truckAnimation2(){
		$('.index_layer-1 .img-truck').addClass('goToPointB');
		setTimeout(function(){
			truckAnimation3();
		},3000)
	};
	function truckAnimation3(){
		$('.index_layer-1 .img-truck').addClass('exitScene');
		$('.index_layer-1 .img-packages').addClass('active');
		setTimeout(function(){
			truckAnimation4();
		},2000)
	};
	function truckAnimation4(){
		$('.index_layer-1 .img-truck').removeClass('goToPointA');
		$('.index_layer-1 .img-truck').removeClass('goToPointB');
		$('.index_layer-1 .img-truck').removeClass('exitScene');
		$('.index_layer-1 .img-truck').addClass('animationEnd');
		setTimeout(function(){
			truckAnimation5();
		},1000)
	};
	function truckAnimation5(){
		$('.index_layer-1 .img-truck').removeClass('animationEnd');
		$('.index_layer-1 .img-packages').removeClass('active');
		setTimeout(function(){
			truckAnimation1();
		},1000)
	};
	$(document).load(
		setTimeout(function(){
			truckAnimation1();
		},3000)
	)
</script>
<div class="index_services" id="services">
	<div class="container">
		<h2 class="index-layer-title"><?php echo $text['5']; ?></h2>
		<center>
			<?php 
			$services_query = mysql_query("SELECT * FROM services ORDER BY id ASC");
			while($run_services = mysql_fetch_assoc($services_query)){
				$id = $run_services['id'];
				$title = $run_services['title'];
				$description = $run_services['description'];
				$services[$id.'_t'] = $title;
				$services[$id.'_d'] = $description;
				$services[$id.'_id'] = $id;
			}
			?>
			<div class="services">
				<div class="service" style="margin-right: 6.5px;">
					<div class="service-image one"></div>
					<p class="service_title"><?php echo $services['1_t'];?></p>
					<p class="service_description"><?php echo $services['1_d'];?></p>
					<a href="services.php?s=<?php echo $services['1_id']; ?>"><div class="service_view-btn">VIEW SERVICE</div></a>
				</div>
				<div class="service" style="margin-right: 6.5px;width: 336px;">
					<div class="service-image two"></div>
					<p class="service_title"><?php echo $services['2_t'];?></p>
					<p class="service_description"><?php echo $services['2_d'];?></p>
					<a href="services.php?s=<?php echo $services['2_id']; ?>"><div class="service_view-btn">VIEW SERVICE</div></a>
				</div>
				<div class="service">
					<div class="service-image three"></div>
					<p class="service_title"><?php echo $services['3_t'];?></p>
					<p class="service_description"><?php echo $services['3_d'];?></p>
					<a href="services.php?s=<?php echo $services['3_id']; ?>"><div class="service_view-btn">VIEW SERVICE</div></a>
				</div>
				<a href="services.php"><div class="view-all-services-btn">View all services</div></a>
			</div>
		</center>
	</div>
</div>
<div class="index_quote">
	<div class="container">
		<i>
			<p class="_quote"><?php echo $text['6']; ?></p>
		</i>
		<p class="_by"><?php echo $text['7']; ?></p>
	</div>
</div>
<div class="index_location">
	<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18926.006720364087!2d-113.480509!3d53.633583!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a024cc3cee393f%3A0x466fd8bc30b1393b!2s17204+91+St+NW%2C+Edmonton%2C+AB+T5Z+2M9%2C+Canada!5e0!3m2!1sen!2sus!4v1435908783427" width="336" height="336" frameborder="0" style="border: 0;margin: 67px 0;display: inline-block;" class="index_google-map" allowfullscreen></iframe>
		<div class="location-info">
			<p><?php echo $text['8']; ?></p>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>
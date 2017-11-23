<?php
	include('header.php');
	if(!loggedin()){
		header('location:index.php');
	}
?>
<title>Create a New Site | Website Maker</title>
<script type="text/javascript">
function slideIn_SlideOne(){
	setTimeout(function(){
		document.getElementById("slide_one").style.marginLeft = "14.5%";
	},100);
}
function slideOut_SlideOne(){
	setTimeout(function(){
		document.getElementById("slide_one").style.marginLeft = "-100%";
	},100);
}
function slideIn_Gallery(){
	setTimeout(function(){
		document.getElementById("gallery").style.marginLeft = "14.5%";
	},100);
	document.cookie = "sitetype=gallery";
}
function slideOut_Gallery(){
	setTimeout(function(){
		document.getElementById("gallery").style.marginLeft = "100%";
	},100);
	document.cookie = "sitetype=gallery; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
function slideOutComplete_Gallery(){
	setTimeout(function(){
		document.getElementById("gallery").style.marginLeft = "-100%";
	},100);
}
function slideIn_Blog(){
	setTimeout(function(){
		document.getElementById("blog").style.marginLeft = "14.5%";
	},100);
	document.cookie = "sitetype=blog";
}
function slideOut_Blog(){
	setTimeout(function(){
		document.getElementById("blog").style.marginLeft = "100%";
	},100);
	document.cookie = "sitetype=blog; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
function slideOutComplete_Blog(){
	setTimeout(function(){
		document.getElementById("blog").style.marginLeft = "-100%";
	},100);
}
function slideIn_Resume(){
	setTimeout(function(){
		document.getElementById("resume").style.marginLeft = "14.5%";
	},100);
	document.cookie = "sitetype=resume";
}
function slideOut_Resume(){
	setTimeout(function(){
		document.getElementById("resume").style.marginLeft = "100%";
	},100);
	document.cookie = "sitetype=resume; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
function slideOutComplete_Resume(){
	setTimeout(function(){
		document.getElementById("resume").style.marginLeft = "-100%";
	},100);
}

function selectTemplate(){
	//$.post({
		//siteid: $('#template').data("tempid")
	//}),
	var siteid = $('#template').data("tempid");
	document.cookie = "sitetemplate=" + siteid;
}
function slideIn_SlideThree(){
	setTimeout(function(){
		document.getElementById("site_info_slide").style.marginLeft = "14.5%";
	},100);
}
</script>
</head>
<div class="pg_create-new-site">
	<div class="container" id="slide_one">
		<?php if(isset($_GET['new'])){
			echo "<p class=\"welcome-user\">Welcome, ".$session_name."</p>";
			echo "<p class=\"step-1_info\">Let's start by creating your first site. Please select one of the following website types.</p>";
		} elseif(isset($_GET['first'])){
			echo "<p class=\"welcome-user\">Hey there ".$session_name.".</p>";
			echo "<p class=\"step-1_info\">Let's create your first site. Please select one of the following website types.</p>";
			echo "<a href=\"index.php\"><button class=\"btn_back\"><p class=\"arrow\">&larr;</p><p class=\"text\">Home</p></button></a>";
		} else {
			echo "<p class=\"welcome-user\">Hey there ".$session_name.".</p>";
			echo "<p class=\"step-1_info\">What type of website are you looking to create?</p>";
			echo "<a href=\"index.php\"><button class=\"btn_back\"><p class=\"arrow\">&larr;</p><p class=\"text\">Home</p></button></a>";
		}
		?>
		<div class="website-types">
			<center>
				<a href="javascript:void(0);" onclick="slideOut_SlideOne();slideIn_Gallery();">
					<div class="website-type">
						<div class="mac-buttons">
							<div class="red-button"></div>
							<div class="yellow-button"></div>
							<div class="green-button"></div>
						</div>
						<div class="type_img"></div>
						<p class="type-p">Gallery</p>
					</div>
				</a>
				<a href="javascript:void(0);" onclick="slideOut_SlideOne();slideIn_Blog();">
					<div class="website-type">
						<div class="mac-buttons">
							<div class="red-button"></div>
							<div class="yellow-button"></div>
							<div class="green-button"></div>
						</div>
						<div class="type_img"></div>
						<p class="type-p">Blog</p>
					</div>
				</a>
				<a href="javascript:void(0);" onclick="slideOut_SlideOne();slideIn_Resume();">
					<div class="website-type">
						<div class="mac-buttons">
							<div class="red-button"></div>
							<div class="yellow-button"></div>
							<div class="green-button"></div>
						</div>
						<div class="type_img"></div>
						<p class="type-p">Resume</p>
					</div>
				</a>
			</center>
		</div>
	</div>
	<div class="container slide_two" id="gallery">
	<button class="btn_back" onclick="slideIn_SlideOne();slideOut_Gallery();"><p class="arrow">&larr;</p><p class="text">Back</p></button>
		<h1>Select a template for your gallery.</h1>
		<div class="templates">
		<?php
		$templates_query = mysql_query("SELECT * FROM templates WHERE type='gallery'");
			while($template = mysql_fetch_assoc($templates_query)){
				$template_id = $template['id'];
				$template_name = $template['name'];
				$template_type = $template['type'];
				$template_thumbnail_img = $template['thumbnail_img'];
				$template_by = $template['by'];;
				echo "
				<a href=\"javascript:void(0);\" onclick=\"selectTemplate();slideOutComplete_Gallery();slideIn_SlideThree();\">
					<div class=\"template\" id=\"template\" data-tempid=\"".$template_id."\">
						<img src=\"".$template_thumbnail_img."\"/>
						<div class=\"bottom-info_bar\">
							<p class=\"name\">".$template_name."</p>
							<p class=\"by\">By ".$template_by."</p>
							<a href=\"demo.php?id=".$template_id."\" target=\"_blank\"><div class=\"live-demo_btn\">Live demo</div></a>
						</div>
					</div>
				</a>
				";
			}
		?>
		</div>
	</div>
	<div class="container slide_two" id="blog">
		<button class="btn_back" onclick="slideIn_SlideOne();slideOut_Blog();"><p class="arrow">&larr;</p><p class="text">Back</p></button>
		<h1>Select a template for your blog.</h1>
		<div class="templates">
		<?php
		$templates_query = mysql_query("SELECT * FROM templates WHERE type='blog'");
			while($template = mysql_fetch_assoc($templates_query)){
				$template_id = $template['id'];
				$template_name = $template['name'];
				$template_type = $template['type'];
				$template_thumbnail_img = $template['thumbnail_img'];
				$template_by = $template['by'];
				echo "
				<a href=\"javascript:void(0);\" onclick=\"selectTemplate();slideOutComplete_Blog();slideIn_SlideThree();\">
					<div class=\"template\" id=\"template\" data-tempid=\"".$template_id."\">
						<img src=\"".$template_thumbnail_img."\"/>
						<div class=\"bottom-info_bar\">
							<p class=\"name\">".$template_name."</p>
							<p class=\"by\">By ".$template_by."</p>
							<a href=\"demo.php?id=".$template_id."\" target=\"_blank\"><div class=\"live-demo_btn\">Live demo</div></a>
						</div>
					</div>
				</a>
				";
			}
		?>
		</div>
	</div>
	<div class="container slide_two" id="resume">
		<h1>Select a template for your resume.</h1>
		<button class="btn_back" onclick="slideIn_SlideOne();slideOut_Resume();"><p class="arrow">&larr;</p><p class="text">Back</p></button>
		<div class="templates">
		<?php
		$templates_query = mysql_query("SELECT * FROM templates WHERE type='resume'");
			while($template = mysql_fetch_assoc($templates_query)){
				$template_id = $template['id'];
				$template_name = $template['name'];
				$template_type = $template['type'];
				$template_thumbnail_img = $template['thumbnail_img'];
				$template_by = $template['by'];
				echo "
				<a href=\"javascript:void(0);\" onclick=\"selectTemplate();slideOutComplete_Resume();slideIn_SlideThree();\">
					<div class=\"template\" id=\"template\" data-tempid=\"".$template_id."\">
						<img src=\"".$template_thumbnail_img."\"/>
						<div class=\"bottom-info_bar\">
							<p class=\"name\">".$template_name."</p>
							<p class=\"by\">By ".$template_by."</p>
							<a href=\"demo.php?id=".$template_id."\" target=\"_blank\"><div class=\"live-demo_btn\">Live demo</div></a>
						</div>
					</div>
				</a>
				";
			}
			
			
			
			
		?>
		</div>
	</div>	
	<div class="container slide_three" id="site_info_slide">
		<h1>Enter the title of your new site (you can change this later).</h1>
		<center>
			<form method="post" action="submit_new_site.php">
				<input type="text" name="site_title" class="input_site_title" required="required" value="<?php echo $session_name;?>'s Site" placeholder="Site title">
				<br>
				<div class="continue_btn">
					<input type="submit" name="submit_new_site" class="continue_btn-input" value="Continue">
					<p class="arrow">&rarr;</p>
				</div>
			</form>
		</center>
	</div>
</div>
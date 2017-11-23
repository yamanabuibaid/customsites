<?php include('header.php'); ?>
<title>WebMaker - Create Your Own Professional Free Website!</title>
<script type="text/javascript">
	setTimeout(function(){
	//	document.getElementById("cover_one").style.backgroundPositionY = "-136px";
	},100);
</script>
<script type="text/javascript">
	function scrollToTemplates(){
		$('html, body').animate({
			scrollTop: 800
		}, 500);
	};
</script>
<?php if(!loggedin()){?>
<style>
	header {
		position: absolute !important;
		width: 100% !important;
		top: 0 !important;
		margin-top: 8px !important;
		background: rgba(0,0,0,0);
	}
	.nav-bar .link {
		padding: 20px !important;
		text-decoration: none !important;
		color: black !important;
		transition: color 0.5s !important;
	}
</style>
<?php } ?>
<?php if(loggedin()){?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".edit_whole_button .right-side_dropdown").click(function(){
			$(this).find('.dropdown-menu').toggleClass('open');
		});
	});
	</script>
<?php if($session_activated == 1){?>
	<script type="text/javascript">
				$(document).ready(function(){
					$('.publish_site').click(function(){
						$.post("publish_site.php",{
							siteid: $('.publish_site').data("siteid")
						},
						function(){
							swal({   
								title: "Published!",   
								text: "Your website has been successfully published.",   
								type: "success",
								showConfirmButton: true,
								confirmButtonText: "Ok",
							});
						}
						);
					});
				});	
				
				$(document).ready(function(){
					$('.unpublish_site').click(function(){
						$.post("unpublish_site.php",{
							siteid: $('.unpublish_site').data("siteid")
						},
						function(){
							swal({   
								title: "Unpublished!",   
								text: "Website has been unpublished.",   
								type: "success",   
								showConfirmButton: true,
								confirmButtonText: "Ok",
								allowOutsideClick: true,
							});
						}
						);
					});
				});	
	</script>
<?php } else {?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.publish_site').click(function(){
			swal({   
				title: "Cannot publish your site.",   
				text: "You need to activate your account in order to publish a site.",   
				type: "error",
				showConfirmButton: true,
				confirmButtonText: "Ok",
			});
		})
	});	
				
				$(document).ready(function(){
					$('.unpublish_site').click(function(){
						$.post("unpublish_site.php",{
							siteid: $('.unpublish_site').data("siteid")
						},
						function(){
							swal({   
								title: "Unpublished!",   
								text: "Website has been unpublished.",   
								type: "success",   
								showConfirmButton: true,
								confirmButtonText: "Ok",
								allowOutsideClick: true,
							});
						}
						);
					});
				});	
	</script>
<?php } ?>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.site_pages').click(function(){
			swal({   
				title: "Pages",
				showCloseButton: true,
				allowOutsideClick: true,
			});
		})
	});	
				$(document).ready(function(){
					$('.site_delete').click(function(){
							swal({   
								title: "Are you sure you would like to delete this site?",   
								text: "Once you've deleted, there's no going back, it will be permenatley deleted.",   
								type: "warning", 
								showCancelButton: true,   
								confirmButtonColor: "#DD6B55", 
								confirmButtonText: "Yes, delete it!",  
								closeOnConfirm: false,
								},
							function(){  
								$.post("delete_site.php",{
									siteid: $('.site_delete').data("siteid")
								}),
									swal("Deleted!", 
									"Your site has been permenatley deleted.", 
									"success"); 
							});
					});
				});	
	</script>
<?php } ?>
</head>
<?php if(!loggedin()){?>
<?php include('nav-bar.php'); ?>
<div class="cover_one" id="cover_one">
	<div class="container">
		<div class="titles">
			<?php
				$title_one_array = array("Creating a professional website with WebMaker is easy.","Create your own professional website in minutes.","We think that you need a professional website.","Creating a professional website has never been any easier.");
				$title_one = $title_one_array[array_rand($title_one_array)];
				$title_two_array = array("No coding required.","We've already done the hard parts.","It starts with you.","Choose from many beautiful templates.");
				$title_two = $title_two_array[array_rand($title_two_array)];
				$button_start_array = array("Start today","Start now","Register today","Register now");
				$button_start = $button_start_array[array_rand($button_start_array)];
			?>
			<h1 class="title_one"><?php echo $title_one;?></h1>
			<h2 class="title_two"><?php echo $title_two;?></h2>
			<a href="register.php"><div class="btn_blue btn_start-today"><?php echo $button_start;?></div></a>
		</div>
		<div class="bottom-text" onclick="scrollToTemplates();">
			<a href="javascript:void(0);" id="bottom_text_text" class="text">
				View templates
				<p class="arrow_down">^</p>
			</a>
		</div>
	</div>
</div>
<div class="colored-bars" id="colored-bars">
	<div class="colored-bar" style="background-color: rgb(216, 220, 228);"></div>
	<div class="colored-bar" style="background-color: rgb(166, 184, 213);"></div>
	<div class="colored-bar" style="background-color: rgb(125, 154, 200);"></div>
</div>
<div id="templates" class="some-templates">
	<div class="container">
		<h1>Just a few of our templates.</h1>
		<div class="templates-div">
			<center>
				<div class="template_1 template"></div>
				<div class="template_2 template"></div>
			</center>
		</div>
</div>


<script type="text/javascript">
$(window).on("scroll touchmove", function () {
    $('header').toggleClass('scrolled', $(document).scrollTop() > 585);
    //$('.some-templates h1').toggleClass('scrolled', $(document).scrollTop() > 700);
		    $('.cover_one').toggleClass('scrolled', $(document).scrollTop() > 100);
			/*setTimeout(function(){
				$('.colored-bars').toggleClass('scrolled', $(document).scrollTop() > 1);
			},1500); */
			$('.some-templates h1').toggleClass('scrolled' , $(document).scrollTop() > 585);
	/*setTimeout(function(){
		$('header').toggleClass('scrolled_header-height', $(document).scrollTop() > 585);
	},100)*/
});
</script>
<?php } else { ?>
	<?php include('top-header.php'); ?>
	<?php include('nav-bar.php'); ?>
	<div class="container">
		<div class="dashboard_sites">
			<div class="top-bar">
				<p class="title">MY SITES</p>
			<?php
				$run_site_count_query = mysql_query("SELECT * FROM sites WHERE userid='$session_id'");
				$site_count = mysql_num_rows($run_site_count_query);
				if($site_count == 0){
					echo "<a href=\"create.php?first\"><div class=\"btn_blue edit_btn\">New Site</div></a>";
				}  else {
					echo "<a href=\"create.php\"><div class=\"btn_blue edit_btn\">New Site</div></a>";
				}
			?>
			</div>
			<div class="right-angle-triangle"></div>
			<div class="bottom-shelf">
			<?php
			$run_sites_query = mysql_query("SELECT * FROM sites WHERE userid='$session_id'");
			$count_sites = mysql_num_rows($run_sites_query);
			if($count_sites == 0){
				echo "Looks like you don't have any sites! Perhaps you could create one now?";
			}
			while($run_sites = mysql_fetch_assoc($run_sites_query)){
				$site_id = $run_sites['id'];
				$temp_site_id = $run_sites['tempid'];
				$template = $run_sites['template'];
				$published = $run_sites['published'];
				$title = $run_sites['title'];
				$type = $run_sites['type'];
				$url = $run_sites['url'];
				if(empty($url)){
					$url2 = "<a class=\"site-address\" target=\"_blank\" href=\"view-site.php?s=".$temp_site_id."\">(websitemaker.com/view-site.php?s=".$temp_site_id.")</a>";
				} else {
					$url2 = "<a class=\"site-address\" target=\"_blank\" href=\"".$url."\">(".$url.")</a>";
				}
				$template_name_query = mysql_query("SELECT * FROM templates WHERE template='$template' AND type='$type'");
				$template_name_run = mysql_fetch_assoc($template_name_query);
				$template_name = $template_name_run['name'];
				if($published == 1){
					$published = 'Published';
					$publish_action = '<li class="unpublish_site" data-siteid="'.$site_id.'">Unpublish</li>';
				} else {
					$published = 'Draft';
					$publish_action = '<li class="publish_site" data-siteid="'.$site_id.'">Publish</li>';
				}
				echo "
					<div class=\"site\">
						<div class=\"site-info\">
						<p class=\"site-title\">".$title."</p>
						".$url2."
					</div>
					<button class=\"edit_whole_button\">
						<a href=\"edit-site.php?s=".$temp_site_id."\" class=\"btn_red edit_btn\">Edit</a>
						<a href=\"javascript:void(0);\" class=\"right-side_dropdown\">
							<p class=\"arrowhead-up\">^</p>
							<div class=\"dropdown-menu\" id=\"dropdown-menu\">
								<div class=\"top-bar-ddmenu\">
									<div class=\"up-arrowhead-triangle\"></div>
									<div class=\"_bar\"></div>
								</div>
								<li class=\"site_pages\">Pages</li>
								".$publish_action."
								<li>Statistics</li>
								<li>Form Entries</li>
								<li class=\"site_delete\" data-siteid=\"".$site_id."\">Delete</li>
							</div>
						</a>
					</button>
			<p class=\"statistic-info\">Status: <b>".$published."</b> | Type: <b>".ucfirst($type)."</b> | Template: <b>".$template_name."</b></p>
				</div>";
			}?>
				
			</div>
		</div>
	</div>
	<script type="text/javascript">
$(window).on("scroll touchmove", function () {
    $('header').toggleClass('scrolled_2', $(document).scrollTop() > 132);
    $('.dashboard_sites').toggleClass('scrolled', $(document).scrollTop() > 132);
});
</script>
<?php } ?>
<?php include('footer.php'); ?>
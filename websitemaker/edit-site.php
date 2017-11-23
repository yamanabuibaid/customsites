<?php include('header.php'); ?>
<title>Edit Site - WebMaker</title>
<?php 
if(!loggedin()){
header('location:index.php');
} ?>
<?php if(isset($_GET['s'])){?>
				<script type="text/javascript">
					$(document).ready(function(){
						 setInterval(function(){
							$.post("save_site.php",{
								sitecontent: $( "#included_temp_container" ).html(),
								siteid: $('#included_temp_container').data("siteid"),
							});
						},5000);
					});
				</script>
<?php if($session_activated == 1){?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#site_publish').click(function(){
			$.post("publish_site.php",{
				siteid: $('#included_temp_container').data("siteid")
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
					$('#site_unpublish').click(function(){
						$.post("unpublish_site.php",{
							siteid: $('#included_temp_container').data("siteid")
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
		$('#site_publish').click(function(){
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
					$('#site_unpublish').click(function(){
						$.post("unpublish_site.php",{
							siteid: $('#included_temp_container').data("siteid")
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
<?php } 
}
?>
</head>
<?php
if(isset($_GET['s'])){
	if(isset($_GET['newsite'])){
		if(isset($_COOKIE['sitetype']) or isset($_COOKIE['sitetemplate'])){
			setcookie("sitetype", '', time()-3600);
			setcookie("sitetemplate", '', time()-3600);
		}
	}
	$site_temp_id = $_GET['s'];
	$run_site_query = mysql_query("SELECT * FROM sites WHERE tempid='$site_temp_id'");
	while($run_site = mysql_fetch_assoc($run_site_query)){
		$site_id = $run_site['id'];
		$user_id = $run_site['userid'];
		$template = $run_site['template'];
		$published = $run_site['published'];
		$removed_copyright = $run_site['removed_copyright'];
		$title = $run_site['title'];
		$type = $run_site['type'];
		$url = $run_site['url'];
		$css_code = $run_site['css_code'];
		$content_code = $run_site['content_code'];
		if($published == 1){
			$publish_actions = "<li class=\"link\" id=\"site_unpublish\">Unpublish</li>";
		} else {
			$publish_actions = "<li class=\"link\" id=\"site_publish\">Publish</li>";
		}
	}
	?>
	<?php include('editor_nav-bar.php'); ?>
	
	<?php
		if(isset($_GET['p'])){
			$p = $_GET['p'];
			if($p == 'pages'){?>
				<div class="container" id="editor_site_pages">
					<h1>Pages</h1>
					<form method="post">
					<?php
						if(isset($_POST['page_submit'])){
							$page_name = htmlentities($_POST['page_name']);
							$page_root_temp = $_POST['page_root'];
							$page_root = ereg_replace("[^A-Za-z0-9?!]", "", $page_root_temp); 
							$check_already_exists_root_siteid_query = mysql_query("SELECT * FROM pages WHERE siteid='$site_id' AND root='$page_root'");
							if(mysql_num_rows($check_already_exists_root_siteid_query) > 0){
								echo "<p>Slug already exists.</p>";
							} else {
								mysql_query("INSERT INTO pages VALUES('','$site_id','$page_name','$page_root')");
							}
						}
						
					?>
						<input type="text" name="page_name" placeholder="Page name">
						<input type="text" name="page_root" placeholder="Page slug">
						<input type="submit" name="page_submit">
					</form>
					<div class="row_pages">
					<script type="text/javascript">
					$(document).ready(function(){
					$('.row_delete_page').click(function(){
							swal({   
								title: "Are you sure you would like to delete this page?",   
								text: "Once you've deleted, there's no going back, it will be permenatley deleted.",   
								type: "warning", 
								showCancelButton: true,   
								confirmButtonColor: "#DD6B55", 
								confirmButtonText: "Yes, delete it!",  
								closeOnConfirm: false,
								},
							function(){  
								$.post("delete_site_page.php",{
									pageid: $('.row_delete_page').data("pageid")
								}),
									swal("Deleted!", 
									"Page permenatley deleted.", 
									"success"); 
							});
					});
					});	
					</script>
					<?php	
						$run_pages_query = mysql_query("SELECT * FROM pages WHERE siteid='$site_id'");
						while($run_pages = mysql_fetch_assoc($run_pages_query)){
							$run_page_id = $run_pages['id'];
							$run_page_name = $run_pages['name'];
							$run_page_root = $run_pages['root']; ?>
							
							<div class="row_page">
								<p class="row_page_name">Page name: <b><?php echo $run_page_name; ?></b></p>
								<p class="row_page_root">Page slug: <b>/<?php echo $run_page_root; ?></b></p>
								<?php if($run_page_root == 'index'){
									
								} else {?>
								<a href="#" class="row_delete_page" data-pageid="<?php echo $run_page_id; ?>">Delete page</a>
								<?php } ?>
							</div>
					<?php } ?>
					</div>
				</div>
		<?php	}
		} else {?>
		<div class="close_editor_side-bar_button"><p>&lt;</p></div>
		<div class="editor_side-bar">
		</div>
		<script type="text/javascript">
		</script>
		<span>
			<style scoped>
			<?php
				echo str_replace("body","#included_temp_container",$css_code);
			?>
			</style>
			<div class="included_temp_container" id="included_temp_container" data-siteid="<?php echo $site_id; ?>">
				<?php echo str_replace("[[title]]","$title",$content_code); ?>
				<?php 
				if($removed_copyright != 1){
					include('copyright-footer.php'); 
				}
				?>
			</div>
		</span>
		<script type="text/javascript">
		$(document).ready(function(){
			$('.close_editor_side-bar_button').click(function(){
				$('.editor_side-bar').toggleClass('closed');
				$('.close_editor_side-bar_button').toggleClass('closed');
				$('#included_temp_container').toggleClass('full');
			})
		});	
		</script>
		<script src="scoped.js"></script>
		<script type="text/javascript">
			$('h1').attr('contentEditable',true);
			$('h2').attr('contentEditable',true);
			$('h3').attr('contentEditable',true);
			$('h4').attr('contentEditable',true);
			$('h5').attr('contentEditable',true);
			$('h6').attr('contentEditable',true);
			$('p').attr('contentEditable',true);
			$('a').attr('contentEditable',true);
			$('#included_temp_container span').attr('contentEditable',true);
			
			$('header').attr('contentEditable',false);
			$('.nav-bar a').attr('contentEditable',false);
			$('.nav-bar').attr('contentEditable',false);
			$('.left-side').attr('contentEditable',false);
			$('.right-side').attr('contentEditable',false);
			$('.logo').attr('contentEditable',false);
			$('.close_editor_side-bar_button p').attr('contentEditable',false);
		</script>
		<?php } ?>
<?php } ?>
<?php include('footer.php'); ?>
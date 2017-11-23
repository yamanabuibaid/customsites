<?php
include('header.php');
?>
<?php if(!loggedin()){?>
<style>
.nav-bar {
	padding: 15px;
}
header{
	position: static;
	background: transparent;
}
</style>
<?php }?>
<?php if(loggedin()){
?>
<title>BrockHub</title>
<script type="text/javascript" src="charCount.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	
		//default usage
		$("#id").charCount();
		//custom usage
		$("#text_to_post").charCount({
			allowed: 999,		
			warning: 40,
		});
	});
</script>
 <script>
$(document).ready(function(){

	$('#button_post_new_submit').click(function(){
		$.post("submit_new_post.php", 
			{text_to_post: $('#text_to_post').val(),
			place: $('#form-place').val()},
			function(){
				function showSuccess(){
					document.getElementById("post_form").style.height = "60px";
					document.getElementById("post_form").style.minHeight = "60px";
					document.getElementById("post_form").style.overflowY = "hidden";
					/*document.getElementById("loading-circle-form-post").style.display = "none";
					document.getElementById("button_post_new_submit").style.display = "none";
					document.getElementById("text_to_post").style.display = "none";
					document.getElementById("form-select").style.display = "none";
					document.getElementById("form-label-info").style.display = "none";
					document.getElementById("form-label-title").style.display = "none";*/
					document.getElementById("counter").style.display = "none";
					$('#form-response').html("<p class='like-success-in'>Posted! Thanks for sharing.</p>");
					setTimeout(function(){
						if ($('#message').length > 0) {
							$('#message').fadeOut(500);
						}
					}, 3000)
				}
				function ShowLoading(){
					var loadingDiv = document.createElement("div");
					loadingDiv.className = "loading-circle-form-post";
					loadingDiv.id = "loading-circle-form-post";
					var elementID = document.getElementById("_submit_button");
					elementID.appendChild(loadingDiv);
					setTimeout(function(){
						showSuccess();
					}, 1500);
				}
				ShowLoading();
			}
		);
		
	});

});
 </script>
 <?php } else {?>
 <title>BrockHub - The Social Network for Brock Students</title>
 <?php } ?>
</head>
<body>
	<?php include('loader.php'); ?>
	<?php if(loggedin()){
if(!isset($_COOKIE['seen'])){
} else {
$_COOKIE['seen'] = 'yes';
echo '<div class="black-screen"></div>
<div class="popup-box" id="popup-box">
	<h3>Welcome Badger!</h3>
	<p>Welcome to BrockHub. This website currently in BETA mode. We are working on fixing bugs, adding new features to improve the site. If you would like to help improve this site and would like to report/request anything, please scroll down to the buttom of the page and click on "Report/Request". Enjoy the website!</p>
</div>';
}
}
?>
<script>
function load(){
		var load = document.createElement("div");
		load.className = "loading-circle";
		load.id = "loading-circle";
		var element = document.getElementById("form_div");
		element.appendChild(load);
}

function removeLoadToError(){
			document.getElementById("loading-circle").style.background = "url(http://images.clipshrine.com/getimg/PngMedium-error-round-button-8962.png) no-repeat";
			}
function removeLoadToSuccess(){
			document.getElementById("loading-circle").style.background = "url(http://icons.iconarchive.com/icons/graphicloads/100-flat-2/48/check-1-icon.png) no-repeat";
}

function validateForm() {
	var loading_circle = document.getElementById("loading-circle");
	if(loading_circle == null){
		load();
	} else {
		loading_circle.style.background = "url(http://growingmail.com/themes/growingmail/assets/img/loading_circle_large.gif) no-repeat";
		validate();
	}
	
	function validate(){
		var x = document.forms["myForm"]["email"].value;
		if (x.length != 6) {
			setTimeout(function(){
			removeLoadToError()
			},500);
			return false;
		} else {
			setTimeout(function(){
			removeLoadToSuccess()
			},500);
			return true;
		}
	}
	validate();
}
</script>
<!--
<script>
$(document).ready(function () {
    $('#myform').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url : $(this).attr('action') || window.location.pathname,
            type: "GET",
            data: $(this).serialize(),
            success: function (data) {
                $("#form_output").html(data);
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});
</script>-->
<?php if(!loggedin()){?>
	<div class="top-index" id="top-index">
		<?php include('nav.php'); ?>
		<div class="container pgcontent">
			<h1 class="big-title">The social network for Brock students, and only Brock students.</h1>
			<p class="small-title">Join the fun</p>
			<div id="form_div">
				<form name="myForm" method="post" id="myform" action="register.php" onsubmit="return validateForm()">
					<p class="email-holder">@brocku.ca</p>
					<input type="text" name="email" class="index-email input" pattern="[A-Za-z]{2}[0-9]{2}[A-Za-z]{2}" maxlength="6" required/>
					<!--<input type="text" name="email" class="index-email input" maxlength="6" title="6 characters minimum"/>-->
					<input type="submit" name="submit_email" class="index-email input-submit continue" value="Continue"/>
				</form>
			</div>
		</div>
	</div>
	<div style="
    height: 9px;
    background: rgba(87, 209, 237, 0.54);
    font-size: 23px;
    color: white;
"></div>
	<div style="
    background: rgb(39, 39, 32);" id="navigation"><div class="container"><p style="
    margin: 0;
    padding: 17px 0;        font-size: 23px;    
    display: inline-block;
    color: white;
">Spotted at Brock</p><div style="
    display: inline-block;
    float: right;
  
    padding: 17px 0;
    color: white;
    font-size: 23px;
">Learn more</div></div></div>
	<div class="mid-index">
		<div class="container pgcontent">
			<p class="title">Best of Spotted at Brock</p>
			<div class="box">
				<p class="post-text">"The other day, the Brock book store was robbed of $30,000. Three books and a hoodie were stolen"</p>
				<div class="timestamp-div">
					<img class="timestamp-img" src="../images/glyphicons/png/glyphicons-55-clock.png">
					<p class="timestamp">10 minutes ago</p>
				</div>
			</div>
			<div class="box">
				<p class="post-text">"The other day, the Brock book store was robbed of $30,000. Three books and a hoodie were stolen"</p>
				<p class="timestamp">10 minutes ago</p>
			</div>
			<div class="box">
				<p class="post-text">"The other day, the Brock book store was robbed of $30,000. Three books and a hoodie were stolen"</p>
				<p class="timestamp">10 minutes ago</p>
			</div>
			<div class="box">
				<p class="post-text">"The other day, the Brock book store was robbed of $30,000. Three books and a hoodie were stolen"</p>
				<p class="timestamp">10 minutes ago</p>
			</div>
			<div class="box">
				<p class="post-text">"The other day, the Brock book store was robbed of $30,000. Three books and a hoodie were stolen"</p>
				<p class="timestamp">10 minutes ago</p>
			</div>
		</div>
	</div>
	<?php } else {?>
<?php 
echo "<script>setTimeout(function(){
		if ($('#message').length > 0) {
			$('#message').fadeOut(500);
		}
		}, 3000)</script>";
	if(isset($_GET['like'])){
		$id = $_GET['like'];
		$postedby_id_query = mysql_query("SELECT * FROM stories WHERE id='$id'");
			while($run_pb_query = mysql_fetch_assoc($postedby_id_query)){
				$postedby_id = $run_pb_query['userid'];
			}
			
		$check_exists_query = mysql_query("SELECT * FROM likes WHERE postid='$id' AND userid='$my_user_id'");
		$check_exists = mysql_num_rows($check_exists_query);
		
		$check_if_disliked_query = mysql_query("SELECT * FROM dislikes WHERE postid='$id' AND userid='$my_user_id'");
		$check_if_disliked = mysql_num_rows($check_if_disliked_query);
		
		if($check_if_disliked > 0){
			mysql_query("DELETE FROM dislikes WHERE userid='$my_id' AND postid='$id'");
			mysql_query("INSERT INTO likes VALUES('','$my_id','$id','$postedby_id')");
			echo "<p class=\"like-success\" id=\"message\">Liked!</p>";
		} else {
			if ($check_exists > 0) {
				echo "<p class=\"like-error\" id=\"message\">You've already liked this.</p>";
			} else {
				if($my_id == $postedby_id){
					echo "<p class=\"like-error\" id=\"message\">sorry, you can't like your own post.</p>";
				} else {
					mysql_query("INSERT INTO likes VALUES('','$my_id','$id','$postedby_id')");
					echo "<p class=\"like-success\" id=\"message\">Liked!</p>";
				}
			}
		}
	}
	if(isset($_GET['dislike'])){
		$id = $_GET['dislike'];
		$postedby_id_query = mysql_query("SELECT * FROM stories WHERE id='$id'");
		while($run_pb_query = mysql_fetch_assoc($postedby_id_query)){
			$postedby_id = $run_pb_query['userid'];
		}
		$check_exists_query = mysql_query("SELECT * FROM dislikes WHERE postid='$id' AND userid='$my_user_id'");
		$check_exists = mysql_num_rows($check_exists_query);

		$check_if_liked_query = mysql_query("SELECT * FROM likes WHERE postid='$id' AND userid='$my_user_id'");
		$check_if_liked = mysql_num_rows($check_if_liked_query);
		
		if($check_if_liked > 0){
			mysql_query("DELETE FROM likes WHERE userid='$my_id' AND postid='$id'");
			mysql_query("INSERT INTO dislikes VALUES('','$my_id','$id','$postedby_id')");
			echo "<p class=\"like-success\" id=\"message\">Disliked!</p>";
		} else {
			if ($check_exists > 0) {
				echo "<p class=\"like-error\" id=\"message\">You've already disliked this.</p>";
			} else {
				if($my_id == $postedby_id){
					echo "<p class=\"like-error\" id=\"message\">You can not dislike your own post!</p>";
				} else {
					mysql_query("INSERT INTO dislikes VALUES('','$my_id','$id','$postedby_id')");
					echo "<p class=\"like-success\" id=\"message\">Disliked!</p>";
				}
			}
		}
	}

?>
<div id="msg-place"></div>
<?php include('nav.php');?>
	<div class="container pg-start-content" id="unique_page">
		<?php include('sidebar.php');?>
		<div class="content">
			<div id="post_form">
				<div id="form-response"></div>
				<p class="form-label-title" id="form-label-title">Your story</p>
				<textarea type="text" id="text_to_post" maxlength="999" placeholder="Hey there <?php echo ucfirst($my_username);?>! What have you spotted at Brock?" class="form-post-textarea"></textarea>
				<div id="_submit_button">
					<button id="button_post_new_submit" class="form-post-button">Post</button>
				</div>
				<select class="form-select" id="form-place">
					<option disabled>Choose</option>
				<?php
				$fetch_places_query = mysql_query("SELECT * FROM places");
				while($fetch_row = mysql_fetch_assoc($fetch_places_query)){
					$place_id = $fetch_row['id'];
					$place_name = $fetch_row['place'];
					echo '<option value="'.$place_id.'">'.$place_name.'</option>';
				}
				?>
				</select>
				<p class="form-label-info" id="form-label-info">Where did you spot this?</p>
			</div>
			<h1 class="title_2" id="title_most-recent">Most recent</h1>
			<?php
				$current_total_posts_query = mysql_query("SELECT * from stories");
				$_SESSION['current_total_posts'] = mysql_num_rows($current_total_posts_query);
			?>
			<div id="postsdiv"></div>
			
		</div>
	</div>
	<?php include('footer.php'); ?>
<?php }?>
</body>
</html>
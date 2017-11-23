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
<script type="text/javascript">
$(document).ready(function(){
	$('#form-anonymous').click(function(){
		if($(this).val() == '1'){
			$('#form-anonymous').attr('value', "0");
		} else {
			$('#form-anonymous').attr('value', "1");
		}
	});
	$('#button_post_new_submit').click(function(){
		$.post("submit_new_post.php", 
			{text_to_post: $('#text_to_post').val(),
			place: $('#form-place').val(),
			anonymous: $('#form-anonymous').val(),
			},
			function(){
				function showSuccess(){
					document.getElementById("post_form").style.height = "60px";
					document.getElementById("post_form").style.minHeight = "60px";
					document.getElementById("post_form").style.overflow = "hidden";
					/*document.getElementById("loading-circle-form-post").style.display = "none";
					document.getElementById("button_post_new_submit").style.display = "none";
					document.getElementById("text_to_post").style.display = "none";
					document.getElementById("form-select").style.display = "none";
					document.getElementById("form-label-info").style.display = "none";
					document.getElementById("form-label-title").style.display = "none";*/
					
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
					$('.post-as-anon-form').css('margin-left','50px');
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
 <?php } ?>
<title>Spotted At <?php echo ucfirst($session_location_name);?> - The Social Network For Students</title>
</head>
<body onload="reloadPosts();">
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
			<h1 class="big-title">The social network for <?php echo ucfirst($session_location_name);?> students, and only <?php echo ucfirst($session_location_name);?> students.</h1>
			<p class="small-title">Join the fun</p>
			<div id="form_div">
				<form name="myForm" method="post" id="myform" action="register.php" onsubmit="return validateForm()">
					<p class="email-holder"><?php echo $session_location_email;?></p>
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
	<div class="mid-index">
		<div class="container pgcontent">
			<p class="title">Best of Spotted at <?php echo ucfirst($session_location_name);?></p>
			<div class="box">
				<p class="post-text">"The other day, the Brock book store was robbed of $30,000. Three books and a hoodie were stolen"</p>
				<div class="timestamp-div">
					<img class="timestamp-img" src="images/glyphicons/png/glyphicons-55-clock.png">
					<p class="timestamp">10 minutes ago</p>
				</div>
			</div>
			<?php
			$all_posts_query = mysql_query("SELECT * from stories ORDER BY id DESC");
			while($run_all_posts = mysql_fetch_assoc($all_posts_query)){
				$all_posts_id = $run_all_posts['id'];
				$popular_posts_query = mysql_query("SELECT * from likes WHERE postid='$all_posts_id' ORDER BY postid DESC");
				$num_rows_postid = mysql_num_rows($popular_posts_query);
				echo $num_rows_postid.'<br>';
				
			}
			?>
			
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
				<textarea type="text" id="text_to_post" maxlength="999" placeholder="Hey there <?php echo ucfirst($my_username);?>! What have you spotted at Brock?" class="form-post-textarea"></textarea>
				<div id="_submit_button">
					<button id="button_post_new_submit" class="form-post-button">Post</button>
				</div>
				<select class="form-select" id="form-place">
					<option disabled selected>Where was this spotted?</option>
				<?php
				$fetch_places_query = mysql_query("SELECT * FROM places");
				while($fetch_row = mysql_fetch_assoc($fetch_places_query)){
					$place_id = $fetch_row['id'];
					$place_name = $fetch_row['place'];
					echo '<option value="'.$place_id.'">'.$place_name.'</option>';
				}
				?>
				</select>
				<div class="post-as-anon-form"><input class="checkbox-anonymous" id="form-anonymous" type="checkbox" value="0">post as anonymous</div>
			</div>
			<h1 class="title_2" id="title_most-recent" style="font-size:39px;">Sort by - </h1>
			<select class="sort-by-dropdown" onchange="sortByDropdown();" id="sort-by-dropdown">
				<option selected="selected" value="recent">most recent</option>
				<option value="up-votes">up votes</option>
				<option value="down-votes">down votes</option>
				<option value="place">place</option>
			</select>
			<select class="sort-by-dropdown" onchange="sortByPlace();" id="sort-by-place" style="display: none;">
				<?php
				$fetch_places_query = mysql_query("SELECT * FROM places");
				while($fetch_row = mysql_fetch_assoc($fetch_places_query)){
					$place_id = $fetch_row['id'];
					$place_name = lcfirst($fetch_row['place']);
					echo '<option value="'.$place_id.'">'.$place_name.'</option>';
				}
				?>
			</select>
			<script type="text/javascript">
			function sortByDropdown(){
				var sort_by = $("#sort-by-dropdown").val();
				if(sort_by == 'recent'){
					$("#sort-by-dropdown").css('backgroundPosition','246px 20px');
					$("#sort-by-place").css('display','none');
					$("#sort-by-dropdown").css('width','282px');
					reloadPosts();
				} else if(sort_by == 'up-votes'){
					$("#sort-by-dropdown").css('backgroundPosition','180px 20px');
					$("#sort-by-place").css('display','none');
					$("#sort-by-dropdown").css('width','210px');
					reloadPosts();
				} else if(sort_by == 'down-votes'){
					$("#sort-by-dropdown").css('backgroundPosition','243px 20px');
					$("#sort-by-place").css('display','none');
					$("#sort-by-dropdown").css('width','278px');
					reloadPosts();
				} else if(sort_by == 'place'){
					$('#sort-by-place option:contains("place")').text('place -');
					$("#sort-by-place").css('display','inline-block');
					$("#sort-by-dropdown").css('backgroundPosition','122px 20px');
					$("#sort-by-dropdown").css('width','166px');
					reloadPosts();
				}
			}
			</script>
			<?php
				$loadedPostsCount_query = mysql_query("SELECT * from stories");
				$loadedPostsCount = mysql_num_rows($loadedPostsCount_query);
			?>
			<script type="text/javascript">
			function updatedPostsCount(){
				$.get("new_post_count.php", function(data) {
					$("#updatedPostsCount").html(data);
				});
				}
				window.setInterval(function(){updatedPostsCount();},5000);
			</script>
			<div id="loadedPostsCount" style="display: none;"><?php echo $loadedPostsCount;?></div>
			<div id="updatedPostsCount" style="display: none;"></div>
			<script type="text/javascript">
			function newPostsCount(){
				var loadedPostsCount = $("#loadedPostsCount").text();
				var updatedPostsCount = $("#updatedPostsCount").text();
				var newPostsCount = updatedPostsCount - loadedPostsCount;
				if(newPostsCount == 1){
					$('#newPostsCount').show();
					$('#newPostsCount').html(newPostsCount + ' new story has been posted. Click this box to view it.');
					$("title").html('('+newPostsCount+') Spotted At Brock - Recent Posts');
				} else if(newPostsCount > 1){
					$('#newPostsCount').show();
					$('#newPostsCount').html(newPostsCount + ' new stories have been posted. Click this box to view them.');
					$("title").html('('+newPostsCount+') Spotted At Brock - Recent Posts');
				}
			}
			window.setInterval(function(){newPostsCount();},1000);
			</script>
			<div class="new-stories" id="newPostsCount" onclick="reloadPosts();updateLoadedCount();"></div>
		
			<script type="text/javascript">
				function reloadPosts(){
					function sortByDropdownUrl(){
						var sort_by = $("#sort-by-dropdown").val();
						if(sort_by == 'recent'){
							postsUrl = 'posts.php';
						} else if(sort_by == 'up-votes'){
							postsUrl = 'posts.php?s=up-votes';
						} else if(sort_by == 'down-votes'){
							postsUrl = 'posts.php?s=down-votes';
						} else if(sort_by == 'place'){
							var place = $("#sort-by-place").val();
							postsUrl = 'posts.php?s=place&p='+place;
						} else {
							postsUrl = 'posts.php';
						}
					}
					sortByDropdownUrl();
					$.get(postsUrl, function(data) {
						$("#postsdiv").html(data);
					});
					$("#newPostsCount").hide();
				}
				function updateLoadedCount(){
					var updatedPostsCount = $("#updatedPostsCount").text();
					$("#loadedPostsCount").html(updatedPostsCount);
					$("title").html('Spotted At Brock - Recent Posts');
				}
			</script>
			<div id="postsdiv"></div>
		<script type="text/javascript">
        function voteUpPost(data_id){     
			$.post("vote-up.php",{
				postid: $(data_id).data("id"),
				posted_by_id: $(data_id).data("by")
			}
			);
			
        }
		 function unvoteUpPost(data_id){     
			$.post("unvote-up.php",{
				postid: $(data_id).data("id"),
				posted_by_id: $(data_id).data("by")
			}
			);
			
        }
		function voteDownPost(data_id){     
			$.post("vote-down.php",{
				postid: $(data_id).data("id"),
				posted_by_id: $(data_id).data("by")
			}
			);
			
        }
		 function unvoteDownPost(data_id){     
			$.post("unvote-down.php",{
				postid: $(data_id).data("id"),
				posted_by_id: $(data_id).data("by")
			}
			);
			
        }
		
</script>
			
		</div>
	</div>
<?php }?>
	<?php include('footer.php'); ?>
</body>
</html>
<?php
include('db.php');
include('functions.php');
date_default_timezone_set('Canada/Eastern');
?>
<!DOCTYPE html>
<html>
<head>

	<!--
		DDDDDDDDDDDDD	DDDDDDDDDDDDD	DDDDDDDDDSDD
		D				D			D	D		  D
		D				D			D	D		  D
		D				D			D	D		  D
		DDDDDDDDDDDDD	DDDDDDDDDDDDD	DDDDDDDDDDDDD
					D	D			D	D			D
					D	D			D	D			D
		DDDDDDDDDDDDD	D			D	DDDDDDDDDDDDD
		-->

	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
	<script src="ajax.js"></script>
	<script type="text/javascript"><!--
		refreshdiv();
	// --></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
<!--<script>
	function view_new_post(){
		document.getElementById("notifier").style.display = "none";
		document.getElementById("the_post").style.display = "block;";
	}
</script>-->
<script>
	function eiej(){
        var postid = $(this).data("id");
		alert(postid);
    }
</script>
<script>
function deletePostPopUp(){
	alert("Are you sure you want to delete this post?");
}
function showLevelInfo(){
	var black_screen = document.createElement("div");
	black_screen.className = "black-screen";
	black_screen.onclick = function () {
		div.parentElement.removeChild(div);
		black_screen.parentElement.removeChild(black_screen);
	};
	var div = document.createElement("div");
	var p = document.createElement("h3");
	p.className = "title";
	var close_button = document.createElement("button");
	close_button.className = "x-button";
	var close_buttonText = document.createTextNode("x");
	div.className = "popup-box";
	close_button.onclick = function () {
		div.parentElement.removeChild(div);
		black_screen.parentElement.removeChild(black_screen);
	};
	var pText = document.createTextNode("About User Levels");
	div.appendChild(p);
	div.appendChild(close_button);
	close_button.appendChild(close_buttonText);
	p.appendChild(pText);
	var element = document.getElementById("unique_page");
	element.appendChild(div);
	element.appendChild(black_screen);
	function removeLevelInfo(){
		var element = document.getElementById("unique_page");
		element.removeChild(div);
		element.removeChild(black_screen);
	}
}
</script>
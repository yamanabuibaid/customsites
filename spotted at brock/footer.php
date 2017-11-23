<div class="footer">
	<div class="footer_top">
	</div>
	<div class="footer_bottom">
		<div class="container">
			<ul>
				<li class="footer_text">Copyright BitPix Labs, LLC 2015</li>
				<div class="right">
					<li class="footer_text">Contact us</li> |
					<li class="footer_text">Blog</li> |
					<li class="footer_text">About</li> |
					<a href="index_select.php"><li class="footer_text">Change location</li></a>
				 </div>
			</ul>
		</div>
	</div>
</div>
<script>
$('#sortBy .top-sortby').on("click", function (event) {
    $('#arrow-sortby').toggleClass('rotate');
    $('#arrow-sortby').toggleClass('rotate2');
    $('#sub-sortby').toggleClass('sortby open');
    $('.navigation-box-bottom .li-list').toggleClass('no-hover');
});
$('#place .top-place').on("click", function (event) {
    $('#arrow-place').toggleClass('rotate');
    $('#arrow-place').toggleClass('rotate2');
    $('#sub-place').toggleClass('places open');
    $('.navigation-box-bottom .li-list').toggleClass('no-hover');
});

</script>
<script>
$(window).on("scroll touchmove", function () {
    $('#header_nav').toggleClass('tiny', $(document).scrollTop() > 65);
    $('#header_nav').toggleClass('tiny', $(document).scrollTop() > 65);
    $('.logo-class').toggleClass('tiny', $(document).scrollTop() > 65);
    $('.nav-bar .logo').toggleClass('tiny', $(document).scrollTop() > 65);
    $('.pg-start-content').toggleClass('scrolled', $(document).scrollTop() > 65);
	$('.nav-bar').toggleClass('scrolled', $(document).scrollTop() > 65);
	$('.side-bar').toggleClass('fixed', $(document).scrollTop() > 361);
	//$('#title_most-recent').toggleClass('scrolled', $(document).scrollTop() > 290);
	//$('#timediv').toggleClass('scrolled', $(document).scrollTop() > 290);
});
</script>
	<!--<script src="ajax.js"></script>
	<script type="text/javascript">
		refreshdiv();
	</script>-->
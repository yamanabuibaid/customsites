<div class="contact-footer">
	<div class="clickable-div" onclick="contactFooter();">
		<center>
			<p class="title">CONTACT US.</p>
			<div class="circle">
				<p>^</p>
			</div>
		</center>
	</div>
	<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18926.006720364087!2d-113.480509!3d53.633583!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a024cc3cee393f%3A0x466fd8bc30b1393b!2s17204+91+St+NW%2C+Edmonton%2C+AB+T5Z+2M9%2C+Canada!5e0!3m2!1sen!2sus!4v1435908783427" frameborder="0" class="google-map" allowfullscreen></iframe>
		<div class="contact-form-div">
			<form method="post">
				<input type="email" placeholder="YOUR EMAIL" name="email" class="email">
				<textarea class="message" placeholder="YOUR MESSAGE"></textarea>
				<input type="submit" name="submut_contact_form" value="CONTACT" class="submit-btn">
			</form>
		</div>
	</div>
</div>
<div class="footer">
		<div class="container">
			<ul class="footer_bar">
			<li class="copyright">&copy; Copyright EasyXpress 2015 - All Rights Reserved</li>
			<span class="right">
				<a href="policy.php" class="link"><li class="">Privacy Policy</li></a>
				<a href="#" class="link"><li class="">Terms and Conditions</li></a>
			</span>
			</ul>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
$(window).on("scroll touchmove", function () {
    $('.pg_title').toggleClass('scrolled', $(document).scrollTop() > 100);
});
</script>
<script type="text/javascript">
$(window).on("scroll touchmove", function () {
    $('.nav_bar').toggleClass('scrolled', $(document).scrollTop() > 165);
    $('body').toggleClass('scrolled', $(document).scrollTop() > 165);
    $('.nav_bar .right').toggleClass('scrolled', $(document).scrollTop() > 165);
    $('.tracking-number-li').toggleClass('active', $(document).scrollTop() > 165);
    $('.tracking-number-dot').toggleClass('active', $(document).scrollTop() > 165);
    $('.tn-top-bar').toggleClass('scrolled', $(document).scrollTop() > 65);
	if($('.tn-top-bar').hasClass('active scrolled')){
		$('body').addClass('scrolled-tn-search');
	} else {
		$('body').removeClass('scrolled-tn-search');
	}
	setTimeout(function(){
		$('.nav_bar').toggleClass('scrolled_nav-bar-height', $(document).scrollTop() > 165);
	},100)
});
</script>
<?php
include('header.php');
if(loggedin()){
	header('location:index.php');
}
?>
<title>Register - Spotted At <?php echo ucfirst($session_location_name);?></title>
</head>
<body>
	<?php include('loader.php'); ?>
	<?php include('nav.php'); ?>
	<div class="top-register">
		<div class="container pgcontent">
			<div style="margin-top: 60px;">
				<h1 class="title">Log in to your account</h1>
			</div>
			<div style="display: inline-block;width:100%;">
				<div class="side right">
					<form method="post" class="form-register">
						<?php
							if(isset($_POST['submit_login'])){
								$email = $_POST['email'];
								$password = md5($_POST['password']);
								$location_id = $_COOKIE['location_id']; 
								$check_login = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password' AND location_id='$location_id'");
									if(mysql_num_rows($check_login) == 1){
										$run = mysql_fetch_array($check_login);
										$user_id = $run['id'];
										$user_status = $run['status'];
										$user_activated = $run['activated'];
										
										if($user_status == 'd' or $user_activated == 'no'){
											if($user_status == 'd'){
												echo "<p>Your account is deactivated.</p>";
											} elseif($user_activated == 'no'){
												echo "<p>Please activate your account. <a href=\"#\">Click here to resend email</a></p>";
											}
										} else {
											$_SESSION['user_id'] = $user_id;
											header('location:index.php');
										}
									} else {
										echo "<p>Invalid username or password.</p>";
									}
							}
						?>
						<input type="text" class="input-register email" name="email" placeholder="Email">
						<input type="password" class="input-register" id="password" name="password" placeholder="Password">
						<input type="submit" class="input-register submit" name="submit_login" value="Login">
						<a href="#" class="sign-form_actions" style="color: rgb(255, 102, 102);">Not a member? Sign up now.</a><br>
					<a href="#" class="sign-form_actions" style="color: rgb(136, 136, 136);">Forgot your password? Recover it now.</a>
					</form>
				</div>
				<div class="side left">
					<?php
					$total_members_query = mysql_query("SELECT * FROM users");
					$total_members = mysql_num_rows($total_members_query);
					echo "<p>".$total_members." total members.</p>";
					?>
					<p>10,000+ active members daily.</p>
					<p>Unlimited fun.</p>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>
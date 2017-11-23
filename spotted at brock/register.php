<?php
include('header.php');
if(loggedin()){
	header('location:index.php');
}
?>
<title>Register - BrockHub</title>
<style>
header{
	background: rgba(0, 0, 0, 0.76);
}
</style>
</head>
<body>
	<?php include('loader.php'); ?>
<?php
if(isset($_POST['submit_email'])){
$start_email = strtolower($_POST['email']);
$_SESSION["email"] = $start_email . "@brocku.ca";
$_SESSION["save_on_email"] = $start_email;
}
?>
	<?php include('nav.php'); ?>
	<?php if(isset($_GET['activate'])){
		if(isset($_SESSION["email_sent_to"])){
			echo "<div class=\"container _pgcontent\"><div class=\"activation-box\"><p>A verification link was sent to: ".$_SESSION["email_sent_to"]." your email. Please click on the link to verify your account.</p></div></div>";
		} else {
			echo "<div><p>Error</p></div>";
		}
	} else {?>
	<div class="top-register">
		<div class="container pgcontent">
			<div style="margin-top: 60px;">
				<h1 class="title">Create an account</h1>
			</div>
			<div style="display: inline-block;width:100%;">
				<div class="side right">
					<form method="post" class="form-register">
						<?php
							if(isset($_POST['submit_register'])){
								$firstname = $_POST['firstname'];
								$lastname = $_POST['lastname'];
								$username = $_POST['username'];
								$password = md5($_POST['password']);
								$verify_password = md5($_POST['verify_password']);
								$name = ucfirst(strtolower($_POST['firstname'])).' '.ucfirst(strtolower($_POST['lastname']));
								if(isset($_SESSION["email"])){
									$email2 = $_SESSION["email"];
								} else {
									$email2 = $_POST['email_two'] . "@brocku.ca";
								}
								
								if($password == $verify_password){
									mysql_query("INSERT INTO users VALUES('','$session_location_id','$name','$email2','$username','$password','no','a','user')");
									$_SESSION['email_sent_to'] = $email2;
									header('location:register.php?activate');
								
								} else {
									echo '<div class="alert alert-error" role="alert">
											<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
											Passwords do not match
											</div>';
								}
							}
						?>
						<input type="text" class="input-register fname" name="firstname" placeholder="First name" pattern="[A-Za-z]+"/>
						<input type="text" class="input-register lname" name="lastname" placeholder="Last name" pattern="[A-Za-z]+"/>
						<?php if(isset($_SESSION["email"])){
							echo '<input type="text" disabled="disabled" class="input-register email" name="email2" style="  cursor: not-allowed;" value="'.$_SESSION["email"].'">';
						} else {
							echo "<p class=\"email-holder-registerpg\">@brocku.ca</p>";
							if(isset($_SESSION["save_on_email"])){
								echo '<input type="text" class="input-register email" name="email_two" placeholder="email" maxlength="6" value="'.$_SESSION["save_on_email"].'">';
							} else {
								echo '<input type="text" class="input-register email" name="email_two" maxlength="6" placeholder="email">';
							}
						}?>
						<input type="text" class="input-register" name="username" placeholder="Username">
						<input type="password" class="input-register" id="password" name="password" placeholder="Password">
						<input type="password" class="input-register" name="verify_password" placeholder="Password again">
						<input type="submit" class="input-register submit" name="submit_register" value="Register">
						<a href="#" class="sign-form_actions" style="color: rgb(255, 102, 102);">Already have an account? Sign in.</a>
					</form>
				</div>
				<div class="side left">
					<p>343,402 total members.</p>
					<p>10,000+ active members daily.</p>
					<p>Unlimited fun.</p>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<?php include('footer.php'); ?>
</body>
</html>
<?php
unset($_SESSION["email"]);
?>
<?php
$title = "Customer Sign In - EazyXPress";
include('header.php');
if(loggedin()){
	header('location:index.php');
}
?>
<div class="pg_signin">
	<div class="pg_title">
		<div class="container">
			<p class="p-title">Customer Sign In</p>
			<p class="p-small-text">Sign in to place an order and view existing orders</p>
		</div>
	</div>
	<div class="container">
		<form method="post" class="form_signin">
			<?php
				if(isset($_POST['submit_signin'])){
					$email = $_POST['email'];
					$password = md5($_POST['password']);
					$check_login = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
					if(mysql_num_rows($check_login) == 1){
						$run = mysql_fetch_array($check_login);
						$user_id = $run['id'];
						$activated = $run['activated'];
						$user_name = ucfirst($run['name']);
						if($activated == 0){
							$to = $email;
							$subject = "Activate Your EazyXPress Account";
							$msg = "
								<html>
								<head>
								<title>Activate Your EazyXPress Account</title>
								</head>
								<body>
								<p>Hello ".$user_name.",</p>
								<p>Please click the link below to activate your EazyXPress account.</p>
								<a href=\"http://eazyxpress.ca/demo2/activate.php?a_id=".$activation_number."\">http://eazyxpress.ca/demo2/activate.php?a_id=".$activation_number."</a>
								</body>
								</html>
							";
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$headers .= 'From: EazyXPress <no-reply@eazyxpress.ca>' . "\r\n";
							mail($to,$subject,$msg,$headers);
							echo "<p>Your account has not yet been activated. Please check your email for another activation link.</a></p>";
						} else {
						$_SESSION['user_id'] = $user_id;
								header('location: index.php');
						}
					} else { ?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text"><b>Error</b>: Incorrect email or password</p>
						</div>
					<?php }
				}
			?>
			<input type="email" name="email" placeholder="Email" class="signin-input-field">
			<input type="password" name="password" placeholder="Password" class="signin-input-field">
			<br>
			<input type="submit" name="submit_signin" value="Sign in" class="signin-input-field btn_login">
		<p style="margin: 9px 0;font-family: 'open sans',sans-serif;">Don't have an account? <a href="signup.php">Create one now.</a></p>
		<p style="margin: 9px 0;font-family: 'open sans',sans-serif;">Forgot your password? <a href="recover.php">Recover it now.</a></p>
		</form>
		</form>
	</div>
</div>
<?php
include('footer.php');
?>
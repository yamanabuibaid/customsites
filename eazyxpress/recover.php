<?php
$title = "Customer Sign In - EazyXPress";
include('header.php');
if(loggedin()){
	header('location:index.php');
}
?>
<div class="pg_recover">
	<div class="pg_title">
		<div class="container">
			<p class="p-title">Recover your account</p>
			<p class="p-small-text">Forgot your username or password? Recover it using the email associated with your account.</p>
		</div>
	</div>
	<div class="container">
		<?php if(isset($_GET['a_id'])){
		$activation_code = $_GET['a_id'];
		?>
		<?php if(isset($_GET['success'])){?>
						<div class="success-div">
							<div class="circle-msg success-msg">
								<p class="error-text">&#9989;</p>
							</div>
							<p class="msg-text">Your password has been successfully changed. You can sign in now.</p>
						</div>	
		<?php } else { ?>
		<form method="post" class="form_signin">
			<?php 
				if(isset($_POST['submit_recover-password-change'])){
					$password = md5($_POST['password']);
					$password_verify = md5($_POST['password_verify']);
					if($password != $password_verify){?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text">Passwords do not match.</p>
						</div>	
					<?php } else {
						$check_a_id = mysql_query("SELECT * FROM users WHERE activation_code='$activation_code'");
						if(mysql_num_rows($check_a_id) > 0){
							while($run_a_account = mysql_fetch_assoc($check_a_id)){
								$id = $run_a_account['id'];
							}
							mysql_query("UPDATE users SET password='$password' WHERE id='$id' AND activation_code='$activation_code'");
							header('location: recover.php?a_id='.$activation_code.'&success');
							} else {?>
							<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text">An unexpected error has occurred. Please try again later.</p>
						</div>	
						<?php }
					}
				}
			?>
			<input type="password" name="password" placeholder="Password" class="signin-input-field">
			<input type="password" name="password_verify" placeholder="Password again" class="signin-input-field">
			<br>
			<input type="submit" name="submit_recover-password-change" value="Change Password" class="signin-input-field btn_login">
		</form>
		<?php } ?>
		<?php } else {?>
			<form method="post" class="form_signin">
			<?php
				if(isset($_POST['submit_recover'])){
					$email = $_POST['email'];
					$user_query = mysql_query("SELECT * FROM users WHERE email='$email'");
					if(mysql_num_rows($user_query) == 0){ ?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text">This email isn't associated with any account.</p>
						</div>
					<?php } else { 
							while($run_account = mysql_fetch_assoc($user_query)){
								$name_of_account = $run_account['name'];
								$activation_code = $run_account['activation_code'];
							}
							$to = $email;
							$subject = "Recover your EazyXPress account";
							$msg = "
								<html>
								<head>
								<title>Recover your EazyXPress Account</title>
								</head>
								<body>
								<p>Hello ".$name_of_account.",</p>
								<p>You have requested to recover your password using your email.</p>
								<p>To recover your account please click the link below.</p>
								<a href=\"http://eazyxpress.ca/demo2/recover.php?a_id=".$activation_code."\">http://eazyxpress.ca/demo2/recover.php?a_id=".$activation_code."</a>
								</body>
								</html>
							";
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$headers .= 'From: <webmaster@example.com>' . "\r\n";
							$headers .= 'Cc: myboss@example.com' . "\r\n";
							mail($to,$subject,$msg,$headers);?>
					
						<div class="success-div">
							<div class="circle-msg success-msg">
								<p class="error-text">&#9989;</p>
							</div>
							<p class="msg-text">Further instructions to recover your account have been sent to <b><?php echo $email;?></b></p>
						</div>
					<?php }
				}
			?>
			<input type="email" name="email" placeholder="Email" class="signin-input-field">
			<br>
			<input type="submit" name="submit_recover" value="SEND EMAIL" class="signin-input-field btn_login">
		<p style="margin: 9px 0;">Don't have an account? <a href="signup.php">Create one now.</a></p>
	
		</form>
		<?php } ?>
	</div>
</div>
<?php
include('footer.php');
?>
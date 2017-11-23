<?php
$title = "Customer Sign Up - EazyXPress";
include('header.php');
if(loggedin()){
	header('index.php');
	if(loggedin()){
	header('location:index.php');
}
}
?>
<div class="pg_signup">
	<div class="pg_title">
		<div class="container">
			<p class="p-title">Customer Sign Up.</p>
			<p class="p-small-text">Create an account. You will need to activate your account using the email you provided.</p>
		</div>
	</div>
	<div class="container">
	<?php 
	if(isset($_GET['activation'])){
		if(isset($_SESSION['new_email'])){ ?>
		<div class="success-div">
			<div class="circle-msg success-msg">
				<p class="success-text">&#9989;</p>
			</div>
				<p class="msg-text">Your account has been created!<br> To login, you will first need to verify your account. Please click on the activation link sent to <b><?php echo $_SESSION['new_email'];?></b></p>
		</div>
	<?php	}
	} else {
	?>
		<form method="post" class="form_signup">
			<?php
				if(isset($_POST['submit_signup'])){
					$name = htmlentities($_POST['name']);
					$email = htmlentities($_POST['email']);
					$_SESSION['new_email'] = $email;
					$password = md5($_POST['password']);
					$confirm_password = md5($_POST['confirm_password']);
					$address = htmlentities($_POST['address']);
					$city = htmlentities($_POST['city']);
					$province = htmlentities($_POST['province']);
					$postal = htmlentities($_POST['postal']);
					$current_date_time = date("F j, Y, g:i a");
					
						$rn1 = mt_rand(0,9);
						$rn2 = mt_rand(0,9);
						$rn3 = mt_rand(0,9);
						$rn4 = mt_rand(0,9);
						$rn5 = mt_rand(0,9);
						$rn6 = mt_rand(0,9);
						$rn7 = mt_rand(0,9);
						$rn8 = mt_rand(0,9);
						$activation_number = $rn1 . $rn2 . $rn3 . $rn4 . $rn5 . $rn6 . $rn7 . $rn8;
					if(empty($name) or empty($email) or empty($password) or empty($confirm_password) or empty($address) or empty($city) or empty($province) or $password != $confirm_password){
						if($password != $confirm_password){ ?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text"><b>Error</b>: password do not match.</p>
						</div>
						<?php } else { ?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text"><b>Error</b>: please fill in all the required fields.</p>
						</div>
						<?php }
						if(empty($province)){ ?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text"><b>Error</b>: Please select a province.</p>
						</div>
						<?php }
					} else {
						$email_exists_query = mysql_query("SELECT * FROM users WHERE email='$email'");
						if(mysql_num_rows($email_exists_query) > 0){ ?>
						<div class="error-div">
							<div class="circle-msg error-msg">
								<p class="error-text">!</p>
							</div>
							<p class="msg-text email-error"><b>Error</b>: this email is already associated with another account.</p>
						</div>
					<?php } else {
							mysql_query("INSERT INTO users VALUES('','$activation_number','$name','$email','$password','0','$address','$city','$province','$postal','$current_date_time')");
							$to = $email;
							$subject = "Activate Your EazyXPress Account";
							$msg = "
								<html>
								<head>
								<title>Activate Your EazyXPress Account</title>
								</head>
								<body>
								<p>Please click the link below to activate your EazyXPress account.</p>
								<a href=\"http://eazyxpress.ca/demo2/activate.php?a_id=".$activation_number."\">http://eazyxpress.ca/demo2/activate.php?a_id=".$activation_number."</a>
								</body>
								</html>
							";
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$headers .= 'From: <webmaster@example.com>' . "\r\n";
							$headers .= 'Cc: myboss@example.com' . "\r\n";
							mail($to,$subject,$msg,$headers);
							header('location:signup.php?activation');
						}
					}
				}
			?>
			<input type="text" name="name" placeholder="Full name" class="signup-input-field" required />
			<input type="email" name="email" placeholder="Email" class="signup-input-field" required />
			<input type="password" name="password" placeholder="Password" class="signup-input-field half" required />
			<input type="password" name="confirm_password" placeholder="Password Again" class="signup-input-field half" required />
			<input type="text" name="address" placeholder="Address" class="signup-input-field half" required />
			<input type="text" name="city" placeholder="City" class="signup-input-field half" required />
			<select class="signup-input-field province-signup" name="province" style="width: 235px;" required />
				<option value="Alberta" selected>Alberta</option>
				<option value="British Columbia">British Columbia</option>
				<option value="Saskatchewan">Saskatchewan</option>
				<option value="Manitoba">Manitoba</option>
				<option value="Ontario">Ontario</option>
				<option value="Quebec">Quebec</option>
				<option value="Nova Scotia">Nova Scotia</option>
				<option value="Prince Edward Island">Prince Edward Island</option>
				<option value="New Brunswick">New Brunswick</option>
				<option value="Newfoundland">Newfoundland</option>
				<option value="Yukon">Yukon</option>
				<option value="Northwest Territories">Northwest Territories</option>
				<option value="Nunavut">Nunavut</option>
			</select>
			<input type="text" name="postal" maxlength="6" placeholder="Postal Code (Optional)" class="signup-input-field half input_postal-code"/>
			<br>
			<input type="submit" name="submit_signup" value="Sign up" class="signup-input-field btn_signup" required />
		</form>
	<?php }?>
	</div>
</div>
<?php
include('footer.php');
?>
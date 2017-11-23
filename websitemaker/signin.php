<?php
	include('header.php');
?>
<div class="container">
	<form method="post">
	<?php
		if(isset($_POST['submit_signin'])){
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			if(empty($email) or empty($password)){
				if(empty($email)){
					echo "<p>Email empty.</p>";
				}
				if(empty($password)){
					echo "<p>Password empty.</p>";
				}
			} else {
				$check_login = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
				if(mysql_num_rows($check_login) == 1){
					$run = mysql_fetch_array($check_login);
					$session_id = $run['id'];
					$current_date_time = date("F j, Y, g:i a");
					$ip_address = $_SERVER['REMOTE_ADDR'];
					mysql_query("UPDATE users SET last_loggedin_date='$current_date_time', last_ip_address='$ip_address' WHERE id='$session_id'");
					$_SESSION['user_id'] = $session_id;
					header('location:index.php');
				} else {
					echo "<p>Incorrect email or password.</p>";
				}
			}
			
		}
	?>
		<input name="email" type="text" required="required"/>
		<input name="password" type="password" required="required"/>
		<input name="submit_signin" type="submit" value="Sign In"/>
	</form>
</div>
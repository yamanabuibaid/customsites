<?php
	include('header.php');
?>
<div class="container">
	<form method="post">
	<?php
		if(isset($_POST['submit_signup'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$confirm_password = md5($_POST['confirm_password']);
			$current_date_time = date("F j, Y, g:i a");
			$ip_address = $_SERVER["REMOTE_ADDR"];
			if(empty($email) or empty($password) or empty($name) or $password != $confirm_password){
				if(empty($email)){
					echo "<p>Email empty.</p>";
				}
				if(empty($password)){
					echo "<p>Password empty.</p>";
				}
				if(empty($name)){
					echo "<p>Please enter your name.</p>";
				}
				if($password != $confirm_password){
					echo "<p>Passwords do not match.</p>";
				}
			} else {
				mysql_query("INSERT INTO users VALUES('','$name','$email','$password','1','$current_date_time','$ip_address','$current_date_time','$ip_address')");
				$get_id_query = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
				while($run = mysql_fetch_assoc($get_id_query)){
					$user_id = $run['id'];
				}
				$_SESSION['user_id'] = $user_id;
				header('location:create.php?new');
			}
			
		}
	?>
		<input name="name" type="text" placeholder="Full name" required="required"/>
		<input name="email" type="email" placeholder="Email" required="required"/>
		<input name="password" type="password" placeholder="Password" required="required"/>
		<input name="confirm_password" type="password" placeholder="Password Again" required="required"/>
		<input name="submit_signup" type="submit"/>
	</form>
</div>
<header id="header_nav" class="header">
	<div class="container">
		<div class="nav-bar">
			<li class="link logo"><a href="index.php" class="logo-class">BrockHub</a></li>
			<?php if(loggedin()){
				echo '<li class="link right btn"><a href="logout.php">Logout</a></li>';
				echo '<li class="link right btn"><a href="#">Settings</a></li>';
				echo '<li class="link right btn"><a href="profile.php?u='.$my_username.'">'.$my_name.'</a></li>';
				echo '<li class="link right btn" style="float:left;"><a href="index.php">Home</a></li>';
				echo '<li class="link right btn" style="float:left;"><a href="#">Blog</a></li>';
			} else {
				echo '<li class="link right btn"><a href="register.php">Register</a></li>';
				echo '<li class="link right btn"><a href="login.php">Log in</a></li>';
			}
			?>
		</div>
	</div>
</header>
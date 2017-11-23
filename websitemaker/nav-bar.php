<header id="header">
	<div class="container">
		<div class="nav-bar">
			<span class="left-side">
				<a href="index.php"><li class="link">Home</li></a>
			</span>
			<div class="logo_middle-side">
				<a href="index.php"><li class="logo">LOGO</li></a>
			</div>
			<span class="right-side">
				<?php if(loggedin()){?>
					<a href="logout.php"><li class="link">Logout</li></a>
				<?php } else { ?>
					<a href="signin.php"><li class="link">Sign in</li></a>
					<a href="register.php"><li class="link">Register</li></a>
				<?php } ?>
			</span>
		</div>
	</div>
</header>
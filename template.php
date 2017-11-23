<?php
include('header.php');
if(!loggedin()){
	header('login.php');
}
?>
</head>
<body>
	<?php include('loader.php'); ?>
	<?php include('nav.php'); ?>
	<div class="container">
	
	</div>
	<?php include('footer.php'); ?>
</body>
</html>
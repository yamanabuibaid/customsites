<?php
ob_start();
include('demofunctions.php');
if(demologgedin()){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Coming Soon</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body {
  /*background: linear-gradient(90deg, white, gray);*/
  background-color: #eee;
}

body, h1, p {
  font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: normal;
  margin: 0;
  padding: 0;
  text-align: center;
}

.container {
  margin-left:  auto;
  margin-right:  auto;
  margin-top: 177px;
  max-width: 1170px;
  padding-right: 15px;
  padding-left: 15px;
}

.row:before, .row:after {
  display: table;
  content: " ";
}

h1 {
  font-size: 48px;
  font-weight: 300;
  margin: 0 0 20px 0;
}

.lead {
  font-size: 21px;
  font-weight: 200;
  margin-bottom: 20px;
}

p {
  margin: 0 0 10px;
}

a {
  color: #3282e6;
  text-decoration: none;
}
.admin-submit_btn{
	  font-size: 28px;
  padding: 13px;
  border-radius: 4px;
  border: 1px solid rgb(92, 92, 92);
  background-color: rgba(0,0,0,0);
  font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
}
</style>
</head>

<body>
<div class="container text-center" id="error">

  <div class="row">
    <div class="col-md-12">
      <div class="main-icon text-success"><span class="uxicon uxicon-clock-refresh"></span></div>
      <h1>Please type in the Admin password.</h1>
      <form method="post" style="
    margin-top: 90px;
">
<?php 
if(isset($_POST['admin-submit'])){
	$admin_password = $_POST['admin-password'];
	if($admin_password == 'MSmmam17.5'){
		$_SESSION['demo-user_id'] = 'true';
		header('location:index.php');
	} else {
		echo "<p>Incorrect admin password.</p>";
	}
}
?>
      <input type="text" name="admin-password" style="
    font-size: 28px;
    padding: 13px;
    border-radius: 4px;
    border: 1px solid rgb(92, 92, 92);
    font-family: &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, Segoe, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;
    background-color: transparent;
" placeholder="Password">

      <input type="submit" value="Submit" class="admin-submit_btn" name="admin-submit" style="
  ">
  </form>
    </div>
  </div>

</div>

</body>
</html>

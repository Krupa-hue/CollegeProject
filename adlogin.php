<?php include('adserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="logstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="adlogin.php">
  	<?php include('aderrors.php'); ?>
  	<div class="input-group">
  		<label>Admin id</label>
  		<input type="text" name="admin_name" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="admin">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="adregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
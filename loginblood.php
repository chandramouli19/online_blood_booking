<?php include('serverblood.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Blood Bank</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="loginblood.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="alogin_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="regblood.php">Sign up</a>
		</p>
	</form>


</body>
</html>
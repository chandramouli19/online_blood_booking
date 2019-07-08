<?php include('serverblood.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="regblood.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
			
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" >
		</div>
		<div class="input-group">
			<label>Aadhar</label>
			<input type="text" name="Aadhar">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="phone_number">
		</div>
		<div class="input-group">
			<label>Blood Bank Id</label>
			<input type="text" name="bloodid">
		</div>
		<div class="input-group">
			<label>Blood Bank</label>
			<input type="text" name="bloodbank">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="aadress">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" >
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="loginblood.php">Sign in</a>
		</p>
	</form>
</body>
</html>
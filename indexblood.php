<!-- 
chandra mouli
16501A1219
login.php
-->
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: loginblood.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: loginblood.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		a{
			text-decoration: none;
			word-wrap: normal;
			
			display: block;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<div class="input-group">
				<a href="book.php">Update</a>
			</div>
			<div class="input-group">
				<a href="histroy.php">History</a>
			</div>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>
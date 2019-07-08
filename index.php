<!-- 
chandra mouli
16501A1219
login.php
-->
<?php include('indq.php'); ?> 
	<?php
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<div class="kk">
			  <form action="dd.php" method="post">
		<center>
		<table>
			<caption>
				<font color='blue' size='6'>Select Your group</font>
			</caption>
			<br><br>
			<tr>
				<td>username</td>
				<td><input type=text name="username"></td>
			</tr>
			<tr>
				<td>Quantity:</td>
				<td><input type=text name="qty"></td>
			</tr>


			<tr>
			<td>Choose Blood Group:</td>
			<td>
				<select name=prd>
					<option>A+</option>
					<option>A-</option>
					<option>B+</option>
					<option>B-</option>
					<option>AB+</option>
					<option>AB-</option>
					<option>O+</option>
					<option>O-</option>
				</select>
			</td>
			<tr>
				<td>Blood Bank name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type=text name="ads"></td>
			</tr>
			<td>place:</td>
				<td><input type=text name="pls"></td>
			</tr>


			<tr>
				<td><input type=submit name="indquery"></td>
				<td><input type=reset></td>
			</tr>
			</table>
		</center>
	</form>
</div>
	<hr>
	<div class="k">
	<form  action="search.php" method="post">
  					<input type="text" name="text4" placeholder="Search..">
   					<input type="submit" value="search" name="submit">
				</form>
				</div>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>
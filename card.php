<!DOCTYPE html>
<html>
<head>
	<title>Card</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.f{
			position: left;
		}
		.d{
			position: right;
		}
	</style>
</head>
<body>
<form method="post">
	<div name="input-group">
		<label>Card Number</label>
		<input type="text" name="cardino">
	</div>
	<div class="f">
		<label>Date</label>
		<input type="text" name="datei">
	</div>
	<div class="d">
		<label>Card Cv Number</label>
		<input type="text" name="cardcv">
	</div>
	<div class="input-group">
		<label>Card Holder Name</label>
		<input type="text" name="name">
	</div>
	<div class="input-group">
		<input type="submit" name="btn">
	</div>
</form>
</body>
</html>
<?php
$db=mysqli_connect('localhost','root','','blood');
if(isset($_POST['btn']))
{
		header('location: msg.php');
}
?>
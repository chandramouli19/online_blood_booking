<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	a{
		text-decoration: none;
		word-wrap: normal;
		color:white;
	}
</style>
</head>

<div class="kk">
			  <form action="update.php" method="post">
			  	<div class="input-group">
			<label>username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Blood Bank Name</label>
			<input type="text" name="Blood_Bank_name" >
		</div>
			  	<div class="input-group">
			<label>Blood id</label>
			<input type="text" name="Blood_id" >
		</div>
		
		<div class="input-group">
			<label>category</label>
			<input type="text" name="category">
		</div>
		<div class="input-group">
			<label>place</label>
			<input type="text" name="place">
		</div>
		<div class="input-group">
			<label>Available</label>
			<input type="text" name="Available">
		</div>
		<div class="input-group">
			<label>Current Available</label>
			<input type="text" name="Curr_available">
		</div>
		<div class="input-group">
			<label>Contect</label>
			<input type="text" name="contect" >
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Update</button>
		</div>
		<div class="input-group">
			<button type="submit" class="btn"><a href="indexblood.php">Back</a></button>
		</div>
		</form>
	</div>
	<body>

</body>
</html>
<?php

session_start(); 
	$username="";
	$name="";
	$cat="";
	$qty="";
	$ads="";
	$pls="";
	$errors = array(); 
	$_SESSION['success'] = "";
	$db = mysqli_connect('localhost','root','','blood');
	if (isset($_POST['indquery'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$cat = mysqli_real_escape_string($db, $_POST['prd']);
		$qty = mysqli_real_escape_string($db, $_POST['qty']);
		$ads = mysqli_real_escape_string($db, $_POST['ads']);
		$pls = mysqli_real_escape_string($db, $_POST['pls']);
		
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($ads)) { array_push($errors, "Address and phno is required"); }

		if (count($errors) == 0) {

			$qq="INSERT INTO $name(username,category,qty,address,place)values('$username','$cat','$qty','$ads','$pls')";
			mysqli_query($db, $qq);
			header('location: dd.php');

		}
	}


?>
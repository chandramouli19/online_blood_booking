<?php 
session_start();
$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost','root','','demo');

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");//error of username
		}
		if (empty($password)) {
			array_push($errors, "Password is required");//error of password
		}

		if (count($errors) == 0) {
			//$password = md5($password);// encryption of passwords in database
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query); //query result was taken from connection of database

			if (mysqli_num_rows($results) == 1) { //fetching matching username and password in database entrys
				$_SESSION['username'] = $username; // if it is sucess username was printed
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php'); //it was displayed in specific location
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	if(isset($_POST['SubmitName'])){
		$date= mysqli_real_escape_string($db,$_POST['Dat']);
		$amount=mysqli_real_escape_string($db,$_POST['Amount']);
		$category=mysqli_real_escape_string($db,$_POST('Category'));
		$query1="INSERT INTO income(Dat,Amount,Category) VALUES('$dat','$amount','$category')";
		$result1 = mysqli_query($db,$query1);
		header('location:index.php');
	}
?>
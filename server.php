<?php 
	session_start();
	$username = "";
	$email    = "";
	$aadhar = "";
	$phone_number = "";

	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost','root','','blood');
	if (isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
		$phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "INSERT INTO register (username, email, aadhar, phone_number, password) VALUES('$username', '$email', '$aadhar', '$phone_number', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
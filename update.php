<?php 
	session_start();
	$username = "";
	$Blood_id = "";
	$Blood_Bank_name = "";
	$category = "";
	$place = "";
	$Available = "";
	$Curr_available = "";
	$contect = "";

	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost','root','','blood');
	if (isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$Blood_id = mysqli_real_escape_string($db, $_POST['Blood_id']);
		$Blood_Bank_name = mysqli_real_escape_string($db,$_POST['Blood_Bank_name']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$place = mysqli_real_escape_string($db, $_POST['place']);
		$Available = mysqli_real_escape_string($db, $_POST['Available']);
		$Curr_available = mysqli_real_escape_string($db, $_POST['Curr_available']);
		$contect = mysqli_real_escape_string($db, $_POST['contect']);
		if (empty($username)) { array_push($errors, "Username is required"); }
		

		if (count($errors) == 0) {
			$query = "INSERT INTO vij (username,Blood_id, Blood_Bank_name, category, place, Available, Curr_available, contect) VALUES('$username', $Blood_id', '$Blood_Bank_name', '$category', '$place', '$Available', '$Curr_available' ,'$contect')";
			mysqli_query($db, $query);

			$_SESSION['category'] = $category;
			$_SESSION['success'] = "You are now logged in";
			header('location: indexblood.php');
		}

	}
	// LOGIN USER
	
	

?>
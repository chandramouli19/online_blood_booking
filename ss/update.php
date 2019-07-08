
<!DOCTYPE html>
<html>
<head>
	<title>Applied</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$db=new PDO("mysql:host=localhost;dbname=blood","root","");
		if(isset($_POST['btn'])){
		$name=$_POST['aname'];
		$uname=$_FILES['myfile']['name'];
		$type=$_FILES['myfile']['type'];
		$data=file_get_contents($_FILES['myfile']['tmp_name']);
		$stmt=$db->prepare("INSERT into $name values('',?,?,?)");
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$type);
		$stmt->bindParam(3,$data);
		$stmt->execute();
		}
		?>
		<form method="post" enctype="multipart/form-data">
			<label>enter</label>
			<input type="text" name="aname"><br>
			<input type="file" name="myfile"/><b>
			<button name="btn">upload</button>
		</form>

</body>
</html>

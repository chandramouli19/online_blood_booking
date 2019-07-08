<!DOCTYPE html>
<html>
<head>
	<title>dd</title>
</head>


		<body>
			<form method="post">
				<input type="text" name="aname">
				<input type="submit" name="bt">
			</form>
			<?php
		$db=new PDO("mysql:host=localhost;dbname=blood","root","");
		$aname="";
		$aname=$_POST['aname'];
		if(isset($_POST['bt'])){
		$stat=$db->prepare("SELECT * from $aname");
		$stat->execute();
		while($row=$stat->fetch())
		{
			echo "<li><a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></li>";
		}
	}
		?>

</body>
</html>

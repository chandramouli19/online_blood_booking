<?php
$dbh=new PDO("mysql:host=localhost;dbname=scholarships","root","");
$id=isset($_GET['id'])? $_GET['id']: "";
$stat=$dbh->prepare("SELECT * from jindal where id=?");
$stat->bindParam(1,$id);
$stat->execute();
$row=$stat->fetch();
header('Content-Type:'.$row['data']);
echo $row['file'];

?>
<!DOCTYPE html>
<html>
<body>

<?php
     $mod=$_POST['text4'];
     $conn=new mysqli('127.0.0.1','root','','blood');
      if($conn->connect_error)
      {
        die("connection failed:".$conn->connect_error);
      }
      $sql="SELECT * FROM vij WHERE category='".$mod."'";
$result=$conn->query($sql);
if($result->num_rows > 0)
{
echo "<center>";
echo "<table style='width:100%;' border='10'>";
echo "<tr>";
echo "<th>Blood_id</th>
      <th>category</th>
      <th>place</th><br>
      <th>Available</th><br>
      <th>Curr_available</th><br>";
while($row=$result->fetch_assoc())
{

echo "<tr>";
echo "<td>" .$row["Blood_id"]. "</td>"; 
echo "<td>" .$row["category"]. "</td>"; 
echo "<td>" .$row["place"]. "</td>";
echo "<td>" .$row["Available"]. "</td>";
echo "<td>" .$row["Curr_available"]. "</td>";
echo "</tr>";
}
}

else
{
echo " <center> sorry not available </center>";
}
echo "</tr>";
echo "</table>"; 
echo "</center>";
$conn->close();
?>
<center><a href="updates.html">Get_Updates</a></center>

</body>
</html>
 

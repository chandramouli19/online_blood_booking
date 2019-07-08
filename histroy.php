<!DOCTYPE html>
<html>
<style type="text/css">
  a{
    text-decoration: none;
    word-wrap: normal;
    color:white;
  }
  .btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
</style>
<body>

<?php
     $conn=new mysqli('127.0.0.1','root','','blood');
      if($conn->connect_error)
      {
        die("connection failed:".$conn->connect_error);
      }
      $sql="SELECT * FROM chandra";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "<center>";
echo "<table style='width:100%;' border='10'>";
echo "<tr>";
echo "<th>username</th>
      <th>category</th>
      <th>quantity</th><br>
      <th>Aadress</th><br>
      <th>place</th><br>";
while($row=$result->fetch_assoc())
{

echo "<tr>";
echo "<td>" .$row["username"]. "</td>"; 
echo "<td>" .$row["category"]. "</td>"; 
echo "<td>" .$row["qty"]. "</td>";
echo "<td>" .$row["address"]. "</td>";
echo "<td>" .$row["place"]. "</td>";
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
<div class="input-group">
  <button class="btn" name="btn"><a href="indexblood.php">Back</a></button>
</div>

</body>
</html>
 

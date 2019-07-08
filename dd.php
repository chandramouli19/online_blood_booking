<!DOCTYPE html>
<html>
<?php
$cat="";
$prd=isset($_POST['prd']);
$qty=isset($_POST['qty']);
$rate="";
$img="";
$ads="";


if($prd=="A+")
{
	$rate=100;
	$img='p1.jpg';
}
else if($prd=="A-")
{
	$rate=100;
	$img='an.jpg';
}
else if($prd=="B+")
{
	$rate=100;
	$img='bp.png';
}
else if($prd=="B-")
{
	$rate=100;
	$img='bn.jpg';
}
else if($prd=="AB+")
{
	$rate=100;
	$img='abnn.jpg';
}
else if($prd=="AB-")
{
	$rate=100;
	$img='abnnn.jpg';
}
else if($prd=="O+")
{
	$rate=100;
	$img='op.jpg';
}
else if($prd=="O-")
{
	$rate=100;
	$img='on.jpg';
}
$amt=((int)$rate*(int)$qty);
$dis=$amt*5/100;
$na=$amt-$dis;


?>

<form action="card.php">
	<center>

	<table border=1 width=70%>
		<caption>
			<font color='blue' size='8'> Invoice</font>
		</caption>
		<br><br>

		<tr>
			<th>S.No</th>
			<th>Description</th>
			<th>Rate</th>
			<th>Qty</th>
			<th>Amount</th>
			<th>Discount</th>
			<th>Net Amount</th>
		</tr>
		
		<tr>
			<td>1</td>
			<td>
				<?php echo "$prd<br><img src=$img width=60 height=60>";?>
			</td>
			<td>
				<?php echo "$rate";?>
			</td>
			<td>
				<?php echo "$qty";?>
			</td>
			<td>
				<?php echo "$amt";?>
			</td>
			<td>
				<?php echo "$dis";?>
			</td>
			<td>
				<?php echo "$na";?>
			</td>
		</tr>
	</table>
	<button value="submit" name="f">Submit</a></button>
	<?php
	if(isset($_POST['f'])){
		header('location: card.php');
	}
	?>
	</center>
	</form>
</body>
</html>
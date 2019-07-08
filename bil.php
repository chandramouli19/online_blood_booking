<html>
	<?php

		$prd=$_GET['prd'];
		$qty=$_GET['qty'];
		$rate=0;
		$img="";
		
		if($prd=="Product 1")
		{
			$rate=400;
			$img='p1.png';
		}
		else if($prd=="Product 2")
		{
			$rate=150;
			$img='p2.jpg';
		}
		else if($prd=="Product 3")
		{
			$rate=50;
			$img='p3.jpg';
		}
		else if($prd=="Product 4")
		{
			$rate=30;
			$img='p4.png';
		}
		$amt=$rate*$qty;
		$dis=$amt*5/100;
		$na=$amt-$dis;
		
	?>
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
	</center>
</html>

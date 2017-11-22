<html>
<body>
<b><center>SELECT MY DATA</center></b>
<?php
$con = mysqli_connect("localhost","root","","tpshop1"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?> 

<?php
$ID=$_POST['item_id'];

$query=$con->prepare("select ITEM_ID, ITEM_NAME, STOCK, UNITPRICE, COSTPRICE, SHORT_DESC, MERCHANT, DETAILS, IMAGE, COMMENTS from item WHERE ITEM_ID='".$ID."'");
$query->execute();
$query->bind_result($ITEM_ID, $ITEM_NAME,$STOCK, $UNITPRICE, $COSTPRICE, $SHORT_DESC, $MERCHANT, $DETAILS, $IMAGE, $COMMENTS);
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Item Name</th>";
echo "<th>Stock</th>";
echo "<th>UnitPrice</th>";
echo "<th>CostPrice</th>";
echo "<th>ShortDesc</th>";
echo "<th>Merchant</th>";
echo "<th>Comments</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$ITEM_ID."</td>";
	echo "<td>".$ITEM_NAME."</td>";
	echo "<td>".$STOCK."</td>";
	echo "<td>".$UNITPRICE."</td>";
	echo "<td>".$COSTPRICE."</td>";
	echo "<td>".$SHORT_DESC."</td>";
	echo "<td>".$MERCHANT."</td>";
	echo "<td>".$COMMENTS."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>

<tr>
<td>&nbsp;</td>
<td align="right">
<form action="index.php" method="post">
<input type="submit"  value="Back" />
</form>
</td>
</tr>


</body>
</html>
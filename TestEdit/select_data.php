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
$iname = $_POST['iname'];

$query=$con->prepare("select ITEM_ID, ITEM_NAME, STOCK, UNITPRICE, COSTPRICE, SHORT_DESC, MERCHANT, COMMENTS from item where item_name='$iname'");
$query->execute();
$query->bind_result($id, $item_name, $stock, $unitprice, $costprice, $shortdesc, $merchant, $comments);
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
	echo "<td>".$id."</td>";
	echo "<td>".$item_name."</td>";
	echo "<td>".$stock."</td>";
	echo "<td>".$unitprice."</td>";
	echo "<td>".$costprice."</td>";
	echo "<td>".$shortdesc."</td>";
	echo "<td>".$merchant."</td>";
	echo "<td>".$comments."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>
</body>
</html>
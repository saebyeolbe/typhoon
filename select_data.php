<html>
<body>
<b><center>SELECT MY DATA</center></b>
<?php
$con = mysqli_connect("localhost","root","","jetshop"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php
$query=$con->prepare("select USER_ID, PASSWORD from juser");
$query->execute();
$query->bind_result($userid, $password);
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Password</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$userid."</td>";
	echo "<td>".$password."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>
</body>
</html>
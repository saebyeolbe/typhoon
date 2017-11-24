<html>
<body>
<b><center>SELECT DATA ADMIN VIEW</center></b>
<?php
$con = mysqli_connect("localhost","root","","brandon"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php
$query=$con->prepare("select USER_ID, USERNAME, PASSWORD, ADDRESS, EMAIL, CONTACT, CREDITCARDNO, ROLE from sensitiveinformation");
$query->execute();
$query->bind_result($userid, $username, $password, $address, $email, $contact, $creditcardno, $role);
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>User_ID</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Contact</th>";
//echo "<th>Transaction No.</th>";
echo "<th>Credit Card No.</th>";
echo "<th>Role</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$userid."</td>";
	echo "<td>".$username."</td>";
	echo "<td>".$password."</td>";
	echo "<td>".$address."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$contact."</td>";
//	echo "<td>".$transactionno."</td>";
	echo "<td>".$creditcardno."</td>";
	echo "<td>".$role."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>
</body>
</html>
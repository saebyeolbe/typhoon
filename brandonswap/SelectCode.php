<html>
<body>
<b><center>SELECT DATA ADMIN VIEW</center></b>
<?php
$con = mysqli_connect("localhost","root","","test"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php
$userid=$_POST['iuserid'];
$selecter=$con->prepare("select * from sensitiveinformation WHERE userid='". $userid ."'");
$selecter->execute();
$selecter->bind_result($userid, $username, $password, $name, $email, $address, $contact, $creditcardno, $role);
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>User_ID</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Contact</th>";
echo "<th>Credit Card No.</th>";
echo "<th>Role</th>";
echo "</tr>";
while($selecter->fetch())
{
	echo "<tr>";
	echo "<td>".$userid."</td>";
	echo "<td>".$username."</td>";
	echo "<td>".$password."</td>";
	echo "<td>".$name."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$address."</td>";
	echo "<td>".$contact."</td>";
	echo "<td>".$creditcardno."</td>";
	echo "<td>".$role."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>
<a href="Home.php"><button class="button" ><span>Back to home</span></button></td>
</body>
</html>
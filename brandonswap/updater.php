<html>
<body>
<b><center>Edit account details</center></b>
<?php
$con = mysqli_connect("localhost","root","","brandon");
if (!$con){
	die("Could not connect: " . mysqli_connect_errno());
}
?>

<?php
$username= $_POST['iusername'];
$password = $_POST['ipwd'];
$address = $_POST['iaddress'];
$email = $_POST['iemail'];
$contact = $_POST['icontact'];
$creditcardno = $_POST['icreditcardno'];
$role = $_POST['irole'];
$name = $_POST['iname'];
$updater= $con->prepare("UPDATE sensitiveinformation SET username = '$username' , password = '$password' , name = '$name' , address = '$address' , email = '$email' , contact = '$contact' , creditcardno = '$creditcardno' , role = '$role' WHERE username ='" .$username. "'");
$updater->execute();

echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Contact</th>";
echo "<th>Credit Card No.</th>";
echo "<th>Role</th>";
echo "</tr>";

echo "<tr>";
echo "<td>".$username."</td>";
echo "<td>".$password."</td>";
echo "<td>".$address."</td>";
echo "<td>".$email."</td>";
echo "<td>".$contact."</td>";
echo "<td>".$creditcardno."</td>";
echo "<td>".$role."</td>";
echo "</tr>";	

echo "</table>"
?>

<form action="test.php" method="post">
<input type="hidden" name="user" value="<?php echo $userid ?>"/>
<b><center><a href="login.php"><input type="button" value="Confirm changes"/></td></center></b>
</body>
</html>








	
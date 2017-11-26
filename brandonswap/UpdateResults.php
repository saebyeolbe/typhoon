<?php
$con = mysqli_connect("localhost","root","","test"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>


	<?php
	$userid=$_POST['iuserid'];
	$username=$_POST['iusername'];
	$password=$_POST['ipassword'];
	$name=$_POST['iname'];
	$email=$_POST['iemail'];
	$address=$_POST['iaddress'];
	$contact=$_POST['icontact'];
	$creditcardno=$_POST['icreditcardno'];
	$role=$_POST['irole'];

	$update=$con->prepare("UPDATE sensitiveinformation SET username = '$username', password = '$ipassword', name = '$name', email = '$email', address = '$address', contact = '$contact', creditcardno = '$creditcardno', role = '$role' WHERE userid='". $userid ."'");
	$update->execute();
	
	if ($update->execute())
	{
		echo "Product Successfully updated.";
	}
	
	echo "<table align='center' border='1'>";
	echo "<tr>";
	echo "<th>UserID</th>";
	echo "<th>Username</th>";
	echo "<th>Password</th>";
	echo "<th>Name</th>";
	echo "<th>E-mail</th>";
	echo "<th>Address</th>";
	echo "<th>Contact</th>";
	echo "<th>Credit Card Number</th>";
	echo "<th>Role</th>";
	echo "</tr>";
	
	
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
	echo "</table>";
	?>
	
	<table align='center'>
	<tr><br>
	<td> <a href="Home.php"><button class="button" style="vertical-align:middle"><span>Back to home page</span></button></td>
	</tr>
	</table>

</body>
</html>

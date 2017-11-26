<html>
<body>
<b><center>Edit user details</center></b>
	<?php
	$con = mysqli_connect("localhost","root","","test");
		if (!$con){
			die("Could not connect: " . mysqli_connect_errno());
}
	?>
	
	<form action="UpdateResults.php" method="post">
	<table align="center">
		</br>
		<tr>
			<td>Enter UserID to be edited</td> <td><input type="number" name="iuserid" required="" /></td>
		</tr>
		
		<tr>
			<td>Enter new Username:</td> <td><input type="text" name="iusername" required="" /></td>
		</tr>
		<tr>
			<td>Enter new Password:</td> <td><input type="password" name="ipassword" required="" /></td>
		</tr>
		<tr>
			<td>Enter new Name:</td> <td><input type="text" name="iname" required="" /></td>
		</tr>
		<tr>
			<td>Enter new E-mail:</td> <td><input type="text" name="iemail" required="" /></td>
		</tr>
		<tr>
			<td>Enter new Address:</td> <td><input type="text" name="iaddress" required="" /></td>
		</tr>
		<tr>
			<td>Enter new contact:</td> <td><input type="number" name="icontact" required="" /></td>
		</tr>
		<tr>
			<td>Enter new Credit Card Number:</td> <td><input type="number" name="icreditcardno" required="" /></td>
		</tr>
		<tr>
			<td>Enter new Role:</td> <td><input type="text" name="irole" required="" /></td>
		</tr>
		<tr>
			<td><button type="submit" value="Submit" class="button" ><span>Press to make changes</span></button></td>
			<td><a href="Home.php"><button type="button" class="button"><span>Go back to previous page</span></button></a></td>
		</tr>
	</table>
	</form>
</body>
</html>
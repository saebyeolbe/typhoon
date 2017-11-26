<html>
<body>
<b><center>All Users</center></b>

	<?php
	$con = mysqli_connect("localhost","root","","test"); //connect to database
		if (!$con){
			die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
		}

	$showall=$con->prepare("select * from sensitiveinformation ");
	$showall->execute();
	$showall->bind_result($userid,$username,$password,$name,$email,$address,$contact,$creditcardno,$role);
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
	while($showall->fetch())
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
	}
	echo "</table>";
	?>
	<br>
	<table align="center">
	<tr>
	<td> <a href="CreateForm.php"><button class="button"><span>Insert new user</span></button></td>
	<td> <a href="SelectForm.php"><button class="button"><span>View one user</span></button></td>
	<td> <a href="UpdateCode.php"><button class="button"><span>Edit a user</span></button></td>
	<td> <a href="DeleteForm.php"><button class="button"><span>Delete a user</span></button></td>
	</tr>
	</table>
</body>
</html>
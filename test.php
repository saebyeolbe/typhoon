<html>
<body>
<b><center>SHOW USERS</center></b>
<?php
$con = mysqli_connect("localhost","root","","swap"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php

$uid = $_POST['user'];
$query=$con->prepare("SELECT userID, contact FROM users WHERE username ='". $uid ."'");

$query->execute();
$query->bind_result($userID, $contact);
echo "<table align='center' border='1'>";  
echo "<tr>";
echo "<th>Userid</th>";
echo "<th>Phone</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$userID."</td>";
	echo "<td>".$contact."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>

</br>
<b><center><a href="Login.php"><input type="button" value="LOGOUT"/></td></center></b>
<a href="Updateacc.php?id=<?php echo $userID ?>"><input type="button" value="UPDATE ACCOUNT"/></td>
<a href="deleteacc.php"><input type="button" value="REMOVE ACCOUNT"/></td>
</body>
</html>
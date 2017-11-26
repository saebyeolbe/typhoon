<html>
<body>
<b><center>User to be deleted</center></b>
<?php
$con = mysqli_connect("localhost","root","","test");
if (!$con){
	die("Could not connect: " . mysqli_connect_errno());
}
?>

<?php
$iusername=$_POST['iusername'];
$deleteuser=$con->prepare("DELETE FROM sensitiveinformation WHERE username='".$iusername."'");
$deleteuser->execute();

if ($deleteuser->execute()) {
	echo "User successfully removed.";
}
else
{
	echo "Error occured while removing user.";
}
?>
</br>
<a href="Home.php"><input type="button" value="Back"/>
</body>
</html>
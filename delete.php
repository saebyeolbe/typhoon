<html>
<body>
<b><center>USER ACCOUNT</center></b>
<?php
$con = mysqli_connect("localhost","root","","swap"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php
$user=$_POST['iuser'];
$deleteuser=$con->prepare("DELETE FROM users WHERE username='". $user ."'");
$deleteuser->execute();

if ($deleteuser->execute())
{  										
  echo "Account successfully removed.";
}
else
{
  echo "Error occured while removing account.";
}
?>
</br>
<a href="login.php"><input type="button" value="BACK"/></td>
 <body>
 <html>
<html>
<body> 
<b><center>UPDATE YOUR ACCOUNT</center></b> 
<?php
$con = mysqli_connect("localhost","root","","swap"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php
$user= $_POST['iuser']; 
$name= $_POST['iname'];
$pwd= $_POST['ipwd'];
$add= $_POST['iadd'];
$mail= $_POST['imail'];
$cont= $_POST['icont'];
$cardno= $_POST['icredno'];
$userid = $_POST['uid'];

$updateuser=$con->prepare("UPDATE users SET username = '$user' , pass = '$pwd', name = '$name', address = '$add', email = '$mail', contact = '$cont', creditcardno = '$cardno' WHERE userID ='" .$userid. "'");    
$updateuser->execute();

echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Username</th>";
echo "<th>Name</th>";
echo "<th>Password</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Contact </th>";
echo "<th>Credit Card</th>";
echo "</tr>";

echo "<tr>";
echo "<td>".$user."</td>";
echo "<td>".$name."</td>";
echo "<td>".$pwd."</td>";
echo "<td>".$add."</td>";
echo "<td>".$mail."</td>";
echo "<td>".$cont."</td>";
echo "<td>".$cardno."</td>";
echo "</tr>";

echo "</table>";
?>

	<form action="test.php" method="post">
	<input type="hidden" name="user" value="<?php echo $userid ?>"/>
	<b><center><a href="Login.php"><input type="button" value="CONFIRM CHANGES"/></td></center></b>
</body>
</html>
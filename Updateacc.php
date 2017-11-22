<?php
	$con = mysqli_connect("localhost","root","","swap"); //connect to database
	if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
	}
	$uid = $_GET['id'];
	$query=$con->prepare("SELECT * FROM users WHERE userID ='$uid';");
	$query->execute();
	$query->bind_result($uid, $user, $pwd, $name, $address, $email, $contact, $creditcard);
	while($query->fetch()){
	  $un = $user;
	  $pw = $pwd;
	  $named = $name;
	  $add = $address;
	  $mail =$email;
	  $cont = $contact;
	  $credit = $creditcard;
	 }     
?>
<html>
<body>
	<form action="update.php" method="post">
	<th>Update Information</th>
	<br />
	Name: <input type="text" name="iname" value="<?php echo $named ?>" />
	<br />
	Username: <input type="text" name="iuser" value="<?php echo $un ?>"/> 
	<br />
	Password: <input type="text" name="ipwd" value="<?php echo $pw ?>"/>
	<br />
	Email: <input type="text" name="imail" value="<?php echo $mail?>"/>
	<br />
	Address: <input type="text" name="iadd" value="<?php echo $add ?>" />
	<br />
	Contact: <input type="text" name="icont" value="<?php echo $cont ?>"/>
	<br />
	Credit Card: <input type="text" name="icredno" value="<?php echo $credit ?>"/>
	<br />
	<input type="hidden" name="uid" value="<?php echo $uid ?>"/>
		<td><button type="submit" value="submit">Update</button></td>
	</form>
</body>
</html>

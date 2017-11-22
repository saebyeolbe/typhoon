<html>
<body>  
<?php
$con = mysqli_connect("localhost","root","","swap"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$usernames= $_POST['iuser'];
$names= $_POST['iname'];
$pwds = $_POST['ipwd'];
$addresses= $_POST['iadd'];
$emails= $_POST['imail'];
$contacts= $_POST['icont'];
$creditcardn= $_POST['icredno'];

$query= $con->prepare("INSERT INTO `users` (`userID`, `username`, `pass`, `name`, `address`, `email`, `contact`, `creditcardno`) VALUES (NULL,?,?,?,?,?,?,?)");

$query->bind_param('sssssss',$usernames,$pwds,$names,$addresses,$emails,$contacts,$creditcardn); //bind the parameters
if ($query->execute()){  //execute query 
  echo "New user account added.";
}else{
  echo "Acccount already added.";
}
?>
</br>
</br>  
<a href="Login.php"><input type="button" value="LOGIN"/></td>
<a href="Createacc.php"><input type="button" value="REGISTER"/></td>
</body>
</html>
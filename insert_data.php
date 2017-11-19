<html>
<body>  
<?php
$con = mysqli_connect("localhost","root","","jetshop"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$iname = $_POST['iname'];
$ipwd = $_POST['ipwd'];



$query= $con->prepare("INSERT INTO `juser` (`USER_ID`, `NAME`,`USERNAME`, `PASSWORD`, `ADDRESS`, `EMAIL`,`CONTACT` , `ROLE`) VALUES
(NULL, ?,?,?,?,?,?,?)");
$name = $iname;
$pwd = $ipwd;
$address = 'ang mo kio ave 2';
$email = 'admin1@email.com';
$contact = '11223344';
$role = 'ADMIN';
$query->bind_param('sssssss', $name,$name, $pwd, $address, $email,$contact, $role); //bind the parameters
if ($query->execute()){  //execute query
  echo "Query executed.";
}else{
  echo "Error executing query.";
}
?>
</body>
</html>
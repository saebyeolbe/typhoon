<html>
<body>
	<b><center>Insert new data into database</center></b>
	<?php
	$con = mysqli_connect("localhost","root","","test");
	if (!$con){
		die('Could not connect: ' . mysqli_connect_errno()); 
	}
	$userid=$_POST['iuserid'];
	$username=$_POST['iuser'];
	$password=$_POST['ipassword'];
	$name=$_POST['iname'];
	$email=$_POST['iemail'];
	$address=$_POST['iaddress'];
	$contact=$_POST['icontact'];
	$creditcardno=$_POST['icreditcardno'];
	$role=$_POST['irole'];
	
	$query= $con->prepare("INSERT INTO `sensitiveinformation` (`userid`, `username`, `password`, `name`, `email`, `address`, `contact`, `creditcardno`, `role`) VALUES (?,?,?,?,?,?,?,?,?)");
	$query->bind_param('sssssssss',$userid,$username,$password,$name,$email,$address,$contact,$creditcardno,$role);
	if ($query->execute()){  
		echo "New user account added.";
	}else{
		echo "Acccount already added.";
	}
	?>
	</br>
	</br>
	<a href="login.php"><input type="button" value="LOGIN"/></td>
	<a href="CreateForm.php"><input type="button" value="REGISTER"/></td>
	<a href="Home.php"><input type="button" value="Home page"/>
</body>
</html>

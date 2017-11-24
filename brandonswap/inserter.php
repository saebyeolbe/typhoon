<html>
<body>
<?php
$con = mysqli_connect("localhost","root","","brandon");
if(!$con){
		die('Could not connect: ' . mysqli_connect_errno());
}
if(isset($_POST["insert"])){
	if($_POST["insert"]=="yes")
	{
		$iname = $_POST['iname'];
		$iusername = $_POST['iusername'];
		$ipwd = $_POST['ipwd'];
		$iname = $_POST['iname'];
		$iaddress = $_POST['iaddress'];
		$iemail = $_POST['iemail'];
		$icontact = $_POST['icontact'];
		//$itransactionno = $_POST['itransactionno'];
		$icreditcardno = $_POST['icreditcardno'];
		$irole = $_POST['irole'];
		$query=$con->prepare("insert into sensitiveinformation(NAME, USERNAME, PASSWORD, ADDRESS, EMAIL, CONTACT , CREDITCARDNO, ROLE) values ('$iname', '$iusername', '$ipwd', '$iaddress', '$iemail', '$icontact', '$icreditcardno', '$irole');");
		//$query=$connect->prepare("insert into item(ITEM_NAME, STOCK, UNITPRICE, COSTPRICE, SHORT_DESC, MERCHANT, COMMENTS) values('$itemname', '$stock', '$unitprice', '$costprice', '$shortdesc', '$merchant', '$comments');");
		//$query->bind_param($iname, $iusername, $ipwd, $iaddress, $iemail, $icontact, $icreditcardno, $irole);
		if ($query->execute()) {
			echo "Query executed successfully.";
		}
		else
		{
			echo "Error executing query.";
		}
	}
}
?>
</br>
<a href="login.php"><input type="button" value="Login"/></td>
<a href="creator.php"><input type="button" value="Register"/></td>
</body>
</html>
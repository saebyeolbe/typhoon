<html>
<body>
	<b><center>Insert new data into database</center></b>
<?php
$con = mysqli_connect("localhost","root","","secretinformation");
if (!$con){
		die('Could not connect: ' . mysqli_connect_errno()); //return error with relevant error number for troubleshooting
}
?>
	<form action="insert_data.php" method="post">
	Name: <input type="text" name

</body>
</html>


<html>
<body>
	<form action="updater.php" method="post">
	<th>Update user information</th>
	</br>
	Name:<input type="text" name="iname" />
	</br>
	Username:<input type="text" name="iusername" />
	</br>
	Password:<input type="password" name="ipwd"  />
	</br>
	Email:<input type="text" name="iemail" />
	</br>
	Address:<input type="text" name="iaddress"  />
	</br>
	Contact number:<input type="text" name="icontact"  />
	</br>
	Credit Card Number:<input type="text" name="icreditcardno" />
	</br>
	Role:<input type="text" name="irole"  />
	</br>
	<input type="hidden" name="userid" value="<?php echo $userid ?>" />
		<td><button type="submit" value="submit">Update</button></td>
	</form>
</body>
</html>	
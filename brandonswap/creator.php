<html>
<body>
	<form action="inserter.php" method="post">
	<th>Create a new user</th>
	</br>
	Name:<input type="text" name="iname" placeholder="Name" />
	</br>
	Username:<input type="text" name="iusername" placeholder="Username" />
	</br>
	Password:<input type="password" name="ipwd" placeholder="Password" />
	</br>
	Email:<input type="text" name="iemail" placeholder="E-mail" />
	</br>
	Address:<input type="text" name="iaddress" placeholder="Address"/>
	</br>
	Contact number:<input type="text" name="icontact" placeholder="Contact" />
	</br>
	Credit Card Number:<input type="text" name="icreditcardno" placeholder="Credit Card No." />
	</br>
	Role:<input type="text" name="irole" placeholder="Role" />
	</br>
	<input type="submit" />
	<input type="hidden" name="insert" value="yes" />

	</form>
</body>
</html>
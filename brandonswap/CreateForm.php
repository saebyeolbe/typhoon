<html>
<body>
	<form action="CreateCode.php" method="post">
	<h1>Create a new user</h1>
	</br>
	UserID:<input type="number" name="id" min="1" placeholder="User ID" />
	</br>
	Name:<input type="text" name="iname" min="1" placeholder="Name" />
	</br>
	Username:<input type="text" name="iuser" min="1" placeholder="Username" />
	</br>
	Password:<input type="password" name="ipassword" min="1" placeholder="Password" />
	</br>
	Email:<input type="text" name="iemail" min="1" placeholder="E-mail" />
	</br>
	Address:<input type="text" name="iaddress" min="1" placeholder="Address"/>
	</br>
	Contact number:<input type="number" name="icontact" min="1" placeholder="Contact" />
	</br>
	Credit Card Number:<input type="number" name="icreditcardno" min="1" placeholder="Credit Card No." />
	</br>
	Role:<input type="text" name="irole" min="1" placeholder="Role" />
	</br>
	<input type="submit" />
	<a href="Home.php"><input type="button" value="Home page"/>
	</form>
</body>
</html>
<?php
//if (!session_is_registered('iusername'))
//{
	if (isset($_POST['cmdlogin']))
	{
		$u = strip_tags($_POST['iusername']);
		$p = sha1(strip_tags($_POST['ipassword'])); //change database and variables accordinly
		$query = sprintf("SELECT user_id FROM sensitiveinformation WHERE username = '%s' AND password = '%s' LIMIT 1;",
        mysql_real_escape_string($u), mysql_real_escape_string($p));
		$result = mysql_query($query);
			
		if (mysql_num_rows($result) != 1)
		{
			echo "Wrong username or password!";
			include "loginform.php";
		} 
		else 
		{
			$row = mysql_fetch_array($result);
			$_SESSION['loginid'] = $row['loginid'];
				$_SESSION['username'] = $u;
				show_userbox();
		
		}
	}
	//	else
		//{
			//include "loginform.php";
		//}
	//}

/* else
{
	show_userbox();
} */
?>

<html>
<body>
<form name="login-form" id="login-form" method="post" action="inserter.php">
	<fieldset>
	<legend>Please login:</legend>
	<dl>
		<dt>
			<label title="Username">Username:
			<input tabindex="1" accesskey="u" name="iusername" type="text" maxlength="50" id="username" placeholder="Username" />
			</label>
		</dt>
	</dl>
	<dl>
		<dt>
			<label title="Password">Password:
			<input tabindex="2" accesskey="p" name="ipassword" type="password" id="password" />
			</label>
		</dt>
	</dl>
	<dl>
		<dt>
			<label title="Submit">
			<input tabindex="3" accesskey="l" type="submit" name="cmdlogin" value="Login" />
			</label>
		</dt>
	</dl>
	</fieldset>
</form>
</body>
</html>

<?php
if (!session_is_registered('iusername'))
{
	if (isset($_POST['cmdlogin']))
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
		else
		{
			include "loginform.php";
		}
}
else
{
	show_userbox();
}
?>
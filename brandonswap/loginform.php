<html>
<body>
<form name="login-form" id="login-form" method="post" action="<?php echo $PHP_SELF; ?>">
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

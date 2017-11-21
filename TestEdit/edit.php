<html>
<form method="post" action="index.php">
<table align="center" border="0">

<tr>
<td>comments:</td>
<td><input type="text" name="comments" value="<?php echo $_GET['comments']; ?>" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="right">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
<input type="hidden" name="update" value="yes" />
<input type="submit" value="update Record"/>
</td>
</tr>
</table>
</form>
<html>
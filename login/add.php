<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');

?>

<form id="FormName" action="added.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="username">username</label></td>
<td><input name="username" maxlength="" type="text" value="<?php echo stripslashes($username) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="password">password</label></td>
<td><input name="password" maxlength="" type="text" value="<?php echo stripslashes($password) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="permission">permission</label></td>
<td><input name="permission" maxlength="" type="text" value="<?php echo stripslashes($permission) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>
<?php


include('../include/footer.php');


?>
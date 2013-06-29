<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');
?>
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$id = $_GET['id'];

$c_Z = mysql_query("SELECT * FROM logindetails WHERE id = '$id' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>

<form id="FormName" action="updated.php" method="post" name="FormName">
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
<td colspan="2" align="center">
<input name="" type="submit" value="Update">
<input name="id" type="hidden" value="<?php echo $id ?>">
</td>
</tr>

</table>
</form>
<?php


include('../include/footer.php');


?>
<?php
session_start();
include('../auth.php');
include('../include/header.php');
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

$c_Z = mysql_query("SELECT * FROM departmentdetails WHERE id = '$id' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>

<form id="FormName" action="updated.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="coursename">coursename</label></td>
<td><input name="coursename" maxlength="" type="text" value="<?php echo stripslashes($coursename) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="departmentname">departmentname</label></td>
<td><input name="departmentname" maxlength="" type="text" value="<?php echo stripslashes($departmentname) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="departmentid">departmentid</label></td>
<td><input name="departmentid" maxlength="" type="text" value="<?php echo stripslashes($departmentid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="yearno">yearno</label></td>
<td><input name="yearno" maxlength="" type="text" value="<?php echo stripslashes($yearno) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="noofsections">noofsections</label></td>
<td><input name="noofsections" maxlength="" type="text" value="<?php echo stripslashes($noofsections) ?>"></td>
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
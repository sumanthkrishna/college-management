
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

$c_Z = mysql_query("SELECT * FROM coursedetails WHERE id = '$id' ");
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
<td width="150" align="right"><label for="courseid">courseid</label></td>
<td><input name="courseid" maxlength="" type="text" value="<?php echo stripslashes($courseid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="noofyears">noofyears</label></td>
<td><input name="noofyears" maxlength="" type="text" value="<?php echo stripslashes($noofyears) ?>"></td>
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
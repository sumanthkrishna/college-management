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

$c_Z = mysql_query("SELECT * FROM subjectplusstaff WHERE id = '$id' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>

<form id="FormName" action="updated.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="staffid">staffid</label></td>
<td><input name="staffid" maxlength="" type="text" value="<?php echo stripslashes($staffid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="courseid">courseid</label></td>
<td><input name="courseid" maxlength="" type="text" value="<?php echo stripslashes($courseid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="branchid">branchid</label></td>
<td><input name="branchid" maxlength="" type="text" value="<?php echo stripslashes($branchid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="year">year</label></td>
<td><input name="year" maxlength="" type="text" value="<?php echo stripslashes($year) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="semester">semester</label></td>
<td><input name="semester" maxlength="" type="text" value="<?php echo stripslashes($semester) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="section">section</label></td>
<td><input name="section" maxlength="" type="text" value="<?php echo stripslashes($section) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="subjectid">subjectid</label></td>
<td><input name="subjectid" maxlength="" type="text" value="<?php echo stripslashes($subjectid) ?>"></td>
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
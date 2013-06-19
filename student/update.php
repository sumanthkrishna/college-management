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

$studentid = $_GET['studentid'];

$c_Z = mysql_query("SELECT * FROM studentdetails WHERE studentid = '$studentid' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>

<form id="FormName" action="updated.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="studentname">studentname</label></td>
<td><input name="studentname" maxlength="" type="text" value="<?php echo stripslashes($studentname) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="studentid">studentid</label></td>
<td><input name="studentid" maxlength="" type="text" value="<?php echo stripslashes($studentid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="mobileno">mobileno</label></td>
<td><input name="mobileno" maxlength="" type="text" value="<?php echo stripslashes($mobileno) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="fathermobileno">fathermobileno</label></td>
<td><input name="fathermobileno" maxlength="" type="text" value="<?php echo stripslashes($fathermobileno) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="email">email</label></td>
<td><input name="email" maxlength="" type="text" value="<?php echo stripslashes($email) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="address">address</label></td>
<td><textarea name="address" cols="15" rows="10"><?php echo stripslashes($address) ?></textarea></td>
</tr>

<tr>
<td width="150" align="right"><label for="imagepath">imagepath</label></td>
<td><input name="imagepath" maxlength="" type="text" value="<?php echo stripslashes($imagepath) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="yearofjoining">yearofjoining</label></td>
<td><input name="yearofjoining" maxlength="" type="text" value="<?php echo stripslashes($yearofjoining) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="coursename">coursename</label></td>
<td><input name="coursename" maxlength="" type="text" value="<?php echo stripslashes($coursename) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="department">department</label></td>
<td><input name="department" maxlength="" type="text" value="<?php echo stripslashes($department) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="year">year</label></td>
<td><input name="year" maxlength="" type="text" value="<?php echo stripslashes($year) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="section">section</label></td>
<td><input name="section" maxlength="" type="text" value="<?php echo stripslashes($section) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center">
<input name="" type="submit" value="Update">
<input name="studentid" type="hidden" value="<?php echo $studentid ?>">
</td>
</tr>

</table>
</form>
<?php


include('../include/footer.php');


?>
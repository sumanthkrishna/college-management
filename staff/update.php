<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');




?>
<?php


include("connect.php");

$staffid = $_GET['staffid'];

$c_Z = mysql_query("SELECT * FROM staffdetails WHERE staffid = '$staffid' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>

<form id="FormName" action="updated.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="staffname">staffname</label></td>
<td><input name="staffname" maxlength="" type="text" value="<?php echo stripslashes($staffname) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="staffid">staffid</label></td>
<td><input name="staffid" maxlength="" type="text" value="<?php echo stripslashes($staffid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="mobileno">mobileno</label></td>
<td><input name="mobileno" maxlength="" type="text" value="<?php echo stripslashes($mobileno) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="emailid">emailid</label></td>
<td><input name="emailid" maxlength="" type="text" value="<?php echo stripslashes($emailid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="address">address</label></td>
<td><textarea name="address" cols="15" rows="10"><?php echo stripslashes($address) ?></textarea></td>
</tr>

<tr>
<td width="150" align="right"><label for="qualification">qualification</label></td>
<td><input name="qualification" maxlength="" type="text" value="<?php echo stripslashes($qualification) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="designation">designation</label></td>
<td><input name="designation" maxlength="" type="text" value="<?php echo stripslashes($designation) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="experience">experience</label></td>
<td><input name="experience" maxlength="" type="text" value="<?php echo stripslashes($experience) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="imagepath">imagepath</label></td>
<td><input name="imagepath" maxlength="" type="text" value="<?php echo stripslashes($imagepath) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="doj">doj</label></td>
<td><input name="doj" maxlength="" type="text" value="<?php echo stripslashes($doj) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="department">department</label></td>
<td><input name="department" maxlength="" type="text" value="<?php echo stripslashes($department) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center">
<input name="" type="submit" value="Update">
<input name="staffid" type="hidden" value="<?php echo $staffid ?>">
</td>
</tr>

</table>
</form>
<?php




include('../include/footer.php');




?>
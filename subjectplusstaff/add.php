<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');

?>
<form id="FormName" action="added.php" method="post" name="FormName">
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
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>

<?php


include('../include/footer.php');


?>
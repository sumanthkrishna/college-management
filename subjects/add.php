<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');

?>
<form id="FormName" action="added.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="coursename">coursename</label></td>
<td><input name="coursename" maxlength="" type="text" value="<?php echo stripslashes($coursename) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="branchname">branchname</label></td>
<td><input name="branchname" maxlength="" type="text" value="<?php echo stripslashes($branchname) ?>"></td>
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
<td width="150" align="right"><label for="subjectname">subjectname</label></td>
<td><input name="subjectname" maxlength="" type="text" value="<?php echo stripslashes($subjectname) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="subjectid">subjectid</label></td>
<td><input name="subjectid" maxlength="" type="text" value="<?php echo stripslashes($subjectid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="staticid">staticid</label></td>
<td><input name="staticid" maxlength="" type="text" value="<?php echo stripslashes($staticid) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>
<?php


include('../include/footer.php');


?>
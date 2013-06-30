<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');

?>




<form id="FormName" action="added.php" method="post" name="FormName">
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
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>
<?php


include('../include/footer.php');


?>
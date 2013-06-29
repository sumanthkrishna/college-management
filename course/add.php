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
<td width="150" align="right"><label for="courseid">courseid</label></td>
<td><input name="courseid" maxlength="" type="text" value="<?php echo stripslashes($courseid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="noofyears">noofyears</label></td>
<td><input name="noofyears" maxlength="" type="text" value="<?php echo stripslashes($noofyears) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>
<?php


include('../include/footer.php');


?>
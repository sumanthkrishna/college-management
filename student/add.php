<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php'); 

?>

<form id="FormName" action="added.php" method="post"  enctype="multipart/form-data" name="FormName">
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
<td width="150" align="right"><label for="image">image</label></td>
<td><input type="file" name="image" id="image" size="40"></td>
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
<td width="150" align="right"><label for="semester">semester</label></td>
<td><input name="semester" maxlength="" type="text" value="<?php echo stripslashes($semester) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="section">section</label></td>
<td><input name="section" maxlength="" type="text" value="<?php echo stripslashes($section) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>



<?php


include('../include/footer.php');


?><?php


include('../include/footer.php');


?>
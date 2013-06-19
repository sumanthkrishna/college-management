<form id="FormName" action="added.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="studentid">studentid</label></td>
<td><input name="studentid" maxlength="" type="text" value="<?php echo stripslashes($studentid) ?>"></td>
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
<td width="150" align="right"><label for="percentage">percentage</label></td>
<td><input name="percentage" maxlength="" type="text" value="<?php echo stripslashes($percentage) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>
<form id="FormName" action="added.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="date">date</label></td>
<td><input name="date" maxlength="" type="text" value="<?php echo stripslashes($date) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="period">period</label></td>
<td><input name="period" maxlength="" type="text" value="<?php echo stripslashes($period) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="subjectcode">subjectcode</label></td>
<td><input name="subjectcode" maxlength="" type="text" value="<?php echo stripslashes($subjectcode) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="staffid">staffid</label></td>
<td><input name="staffid" maxlength="" type="text" value="<?php echo stripslashes($staffid) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center"><input name="" type="submit" value="Add"></td>
</tr>

</table>
</form>
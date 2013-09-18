<?php


include("connect.php");

$id = $_GET['id'];

$c_Z = mysql_query("SELECT * FROM dailyattendance WHERE id = '$id' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>

<form id="FormName" action="updated.php" method="post" name="FormName">
<table width="448" border="0" cellspacing="2" cellpadding="0">

<tr>
<td width="150" align="right"><label for="studentid">studentid</label></td>
<td><input name="studentid" maxlength="" type="text" value="<?php echo stripslashes($studentid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="subjectid">subjectid</label></td>
<td><input name="subjectid" maxlength="" type="text" value="<?php echo stripslashes($subjectid) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="date">date</label></td>
<td><input name="date" maxlength="" type="text" value="<?php echo stripslashes($date) ?>"></td>
</tr>

<tr>
<td width="150" align="right"><label for="period">period</label></td>
<td><input name="period" maxlength="" type="text" value="<?php echo stripslashes($period) ?>"></td>
</tr>

<tr>
<td colspan="2" align="center">
<input name="" type="submit" value="Update">
<input name="id" type="hidden" value="<?php echo $id ?>">
</td>
</tr>

</table>
</form>
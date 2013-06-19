<a href="add.php">Add entry</a><br>
<br>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$result = mysql_query("SELECT * FROM perioddetails ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$date = stripslashes(mysql_result($result,$i,"date"));
		$period = stripslashes(mysql_result($result,$i,"period"));
		$subjectcode = stripslashes(mysql_result($result,$i,"subjectcode"));
		$staffid = stripslashes(mysql_result($result,$i,"staffid"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$date.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');

?>
<a href="add.php">Add entry</a><br>
<br>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$result = mysql_query("SELECT * FROM subjectdetails ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$coursename = stripslashes(mysql_result($result,$i,"coursename"));
		$branchname = stripslashes(mysql_result($result,$i,"branchname"));
		$year = stripslashes(mysql_result($result,$i,"year"));
		$semester = stripslashes(mysql_result($result,$i,"semester"));
		$subjectname = stripslashes(mysql_result($result,$i,"subjectname"));
		$subjectid = stripslashes(mysql_result($result,$i,"subjectid"));
		$staticid = stripslashes(mysql_result($result,$i,"staticid"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$coursename.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
<?php


include('../include/footer.php');


?>
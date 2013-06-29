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

$result = mysql_query("SELECT * FROM staffdetails ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$staffname = stripslashes(mysql_result($result,$i,"staffname"));
		$staffid = stripslashes(mysql_result($result,$i,"staffid"));
		$mobileno = stripslashes(mysql_result($result,$i,"mobileno"));
		$emailid = stripslashes(mysql_result($result,$i,"emailid"));
		$address = stripslashes(mysql_result($result,$i,"address"));
		$qualification = stripslashes(mysql_result($result,$i,"qualification"));
		$designation = stripslashes(mysql_result($result,$i,"designation"));
		$experience = stripslashes(mysql_result($result,$i,"experience"));
		$imagepath = stripslashes(mysql_result($result,$i,"imagepath"));
		$doj = stripslashes(mysql_result($result,$i,"doj"));
		$department = stripslashes(mysql_result($result,$i,"department"));
		
	$row .= '<tr>
	<td><a href="update.php?staffid='.$staffid.'">'.$staffname.'</a></td>
	<td><a href="delete.php?staffid='.$staffid.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
<?php




include('../include/footer.php');




?>
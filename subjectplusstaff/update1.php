<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?><a href="add.php">Add entry</a><br>
<br>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");
$staffid=$_GET['staffid'];
$result = mysql_query("SELECT * FROM staffplussubject where staffid='$staffid' ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$subjectid = stripslashes(mysql_result($result,$i,"subjectid"));
		$staffid = stripslashes(mysql_result($result,$i,"staffid"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$subjectid.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>


<?php


include('../include/footer.php');


?>
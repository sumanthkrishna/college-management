<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>

<a href="add.php">Add entry</a><br>
<br>

<?php

include("connect.php");

$result = mysql_query("SELECT * FROM studentdetails ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$studentname = stripslashes(mysql_result($result,$i,"studentname"));
		$studentid = stripslashes(mysql_result($result,$i,"studentid"));
		$mobileno = stripslashes(mysql_result($result,$i,"mobileno"));
		$fathermobileno = stripslashes(mysql_result($result,$i,"fathermobileno"));
		$email = stripslashes(mysql_result($result,$i,"email"));
		$address = stripslashes(mysql_result($result,$i,"address"));
		$imagepath = stripslashes(mysql_result($result,$i,"imagepath"));
		$yearofjoining = stripslashes(mysql_result($result,$i,"yearofjoining"));
		$coursename = stripslashes(mysql_result($result,$i,"coursename"));
		$department = stripslashes(mysql_result($result,$i,"department"));
		$year = stripslashes(mysql_result($result,$i,"year"));
		$semester = stripslashes(mysql_result($result,$i,"semester"));
    	
        $section = stripslashes(mysql_result($result,$i,"section"));
		
	$row .= '<tr>
	<td><a href="update.php?studentid='.$studentid.'">'.$studentname.'</a></td>
	<td><a href="delete.php?studentid='.$studentid.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>

<?php


include('../include/footer.php');


?>
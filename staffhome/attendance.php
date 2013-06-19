<?php
session_start();
include('connect.php');

$result=mysql_query("select * from subjectplusstaff where staffid='$_SESSION[username]'");
$num=mysql_num_rows($result);
$data=mysql_fetch_array($result);
$result1=mysql_query("select * from subjectdetails where subjectid='$data[subjectid]'");
$data1=mysql_fetch_array($result1);
$num1=mysql_num_rows($result1);


echo '<table border="1" cellpadding="3" cellspacing="0"><tr>
<td>subject name 
<td>year

</tr>
';

if ($num > 0 ) {
$i=0;
while ($i < $num) {
global $row;



$coursename = stripslashes(mysql_result($result1,$i,"coursename"));

$departmentname = stripslashes(mysql_result($result1,$i,"branchname"));

$year = stripslashes(mysql_result($result1,$i,"year"));

$semester = stripslashes(mysql_result($result1,$i,"semester"));
$section = stripslashes(mysql_result($result,$i,"section"));

$subjectname = stripslashes(mysql_result($result1,$i,"subjectname"));
$subjectid = stripslashes(mysql_result($result1,$i,"subjectid"));

    
       	echo '<tr><td>'.$subjectname.'</td>';
	echo '<td>'.$year.'</td>';
    echo "<td><a href='addattendance.php?coursename=$coursename&departmentname=$departmentname&year=$year&subjectname=$subjectname&subjectid=$subjectid&section=$section'>ADD attendance</a>";
    
    
        //$row .= '<tr>
        //<td>$id</td>
        //<td><a href="update.php?id='.$id.'">'.$title.'</a></td>
	//<td><a href="delete.php?id='.$id.'">Delete</a></td>
	//</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>

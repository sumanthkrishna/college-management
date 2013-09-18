<?php

include('connect.php');
$result=mysql_query("select * from staffplussubject where staffid='$_SESSION['staffid']'");
$num=mysql_num_rows($result);
$data=mysql_fetch_array($result);
?>
<table>
<tr>
<td>course name
<td>department name
<td>year
<td>subject name 
<td>section
<td>add attendace
</tr>
<?php
while($num>0)
{
	echo "<tr>";
	echo "<td>".$data['coursename'];
    echo "<td>".$data['departmentname'];
    echo "<td>".$data['year'];
    echo "<td>".$data['subjectname'];
    echo "<td>".$data['section'];
    echo "<td><a href='addattendance.php?coursename=$data['coursename']&departmentname=$data['departmentname']&year=$data['year']&subjectname=$data['subjectname']&section=$data['section']'>ADD attendance</a>";
	echo "</tr>";
}
?>    
</table>
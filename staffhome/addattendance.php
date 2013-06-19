<?php
session_start();
$_SESSION['coursename']=$_GET['coursename'];
$_SESSION['departmentname']=$_GET['departmentname'];
$_SESSION['year']=$_GET['year'];
$_SESSION['semester']=$_GET['semester'];
$_SESSION['subjectname']=$_GET['subjectname'];
$_SESSION['subjectid']=$_GET['subjectid'];
$_SESSION['section']=$_GET['section'];

include('connect.php');
$query=mysql_query("select studentid from studentdetails where coursename='$_GET[coursename]' and department='$_GET[departmentname]' and year='$_GET[year]' and section='$_GET[section]'");
//$result=mysql_fetch_array($query);
$num=mysql_num_rows($query);


?>
<form method=get action=addedattendance.php>
<table>
<tr>
<td>date</td>
<td><input type=text name="date" ></td>

</tr>
<tr>
    <td>period</td>
<td> 1<input type='checkbox' name=periods[] value=1>
     2<input type='checkbox' name=periods[] value=2>
     3<input type='checkbox' name=periods[] value=3>
	 4<input type='checkbox' name=periods[] value=4>
	 5<input type='checkbox' name=periods[] value=5>
	 6<input type='checkbox' name=periods[] value=6>
	 7<input type='checkbox' name=periods[] value=7>
	 


</td></tr>
<?php

while ($result=mysql_fetch_array($query)) {




echo "<tr>";
echo  "<td>".$result['studentid'];
echo  "<td><input type=checkbox name=attendance[] value=$result[studentid]>";
echo  "</tr>";
}




?>
<tr>
<td colspan=2 align=center><input type=submit></td>
</tr>
</table>
</form>





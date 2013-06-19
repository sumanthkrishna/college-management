<?php
session_start();
include('connect.php');
$attendance=$_GET['attendance'];
$periods=$_GET['periods'];
$date=$_GET['date'];

$coursename=$_SESSION['coursename'];
$departmentname=$_SESSION['departmentname'];
$year=$_SESSION['year'];
$semester=$_SESSION['semester'];

$subjectname=$_SESSION['subjectname'];
$subjectid=$_SESSION['subjectid'];

$section=$_SESSION['section'];


$query=mysql_query("select studentid from studentdetails where coursename='$coursename' and department='$departmentname' and year='$year' and section='$section'");
$num=mysql_num_rows($query);

while($result=mysql_fetch_array($query))
{
    foreach($attendance as $y)
    {
        if($result[studentid]==$y)
            {
                         foreach($periods as $period)
                              {
                               mysql_query("insert into dailyattendance values('','$result[studentid]','$subjectid','$date','$period')");   
                               }
             }
    }
}
foreach($periods as $period)
    {
 mysql_query("insert into perioddetails values(' ','$date','$period','$subjectid','$_SESSION[username]')");   
   }
 
?>
<?php
session_start();
include('../connect.php');

$studentid=$_SESSION['username'];


$query=mysql_query("select * from dailyattendance where subjectid='1234' and studentid='$studentid' ");
$num=mysql_num_rows($query);


$query1=mysql_query("select * from perioddetails where subjectcode='1234' ");
$num1=mysql_num_rows($query1);

echo "1234 percentage:";
$per=($num/$num1)*100;
echo $per;

?>
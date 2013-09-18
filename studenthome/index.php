<?php
session_start();
$studentid=$_SESSION['username'];
include('../admin/adminheader.php');
include('leftdiv.php');
include('connect.php');


$result=mysql_query("select * from studentdetails where studentid='08501a1271' ");

while($data2=mysql_fetch_array($result))
{


$_SESSION['studentname']=$data2['studentname'];
$_SESSION['studentid']=$data2['studentid'];
$_SESSION['course']=$data2['course'];
$_SESSION['department']=$data2['department'];
$_SESSION['year']=$data2['year'];
$_SESSION['semester']=$data2['semester'];
$_SESSION['section']=$data2['section'];
}




?>



<?php
include('../include/footer.php');
?>
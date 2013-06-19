<?php
session_start();
include('auth.php');

$id=$_SESSION['id'];

$x=$_POST['oldpassword'];
$y=$_POST['newpassword'];
$z=$_POST['renewpassword'];
include('connect.php');

$data=mysql_query("select password from login where id='$id' ");
$data1=mysql_fetch_array($data);
$data2=$data1['password'];
if($x==$data2)
{
mysql_query("update login SET password ='$y'  where id='$id' ");
echo "password updated successfully will be redirected to home page in 5 secs";
//header('refresh:5;Location:home.php');
header( "refresh:5;url=home1.php" );

}
else
{
header('Location:change.php');

}

?>
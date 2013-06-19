<?php
   $username=$_POST['username'];
   $password=$_POST['password'];
   $permission=$_POST['permission'];
   
include('connect.php');

$data=mysql_query("select * from logindetails where username='$username' and password='$password' and permission='$permission'");
$data1=mysql_num_rows($data);

if($data1==1)
{
   session_start();
   
      $_SESSION['username'] = $username;
	  $_SESSION['permission']=$permission;
      
   if($permission=="1")
   {
 header("Location: admin/adminhome.php");
	}
	 if($permission=="2")
   {
 header("Location: staffhome/index.php");
	}
	 if($permission=="3")
   {
      
 header("Location: studenthome/index.php");
	}
}   
else
{
header( "refresh:5;url=login.php" );

}
   
?>
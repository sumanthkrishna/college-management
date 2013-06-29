<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');




?>
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$staffid = $_POST['staffid'];

$staffname = trim(mysql_real_escape_string($_POST["staffname"]));
		$staffid = trim(mysql_real_escape_string($_POST["staffid"]));
		$mobileno = trim(mysql_real_escape_string($_POST["mobileno"]));
		$emailid = trim(mysql_real_escape_string($_POST["emailid"]));
		$address = trim(mysql_real_escape_string($_POST["address"]));
		$qualification = trim(mysql_real_escape_string($_POST["qualification"]));
		$designation = trim(mysql_real_escape_string($_POST["designation"]));
		$experience = trim(mysql_real_escape_string($_POST["experience"]));
		$imagepath = trim(mysql_real_escape_string($_POST["imagepath"]));
		$doj = trim(mysql_real_escape_string($_POST["doj"]));
		$department = trim(mysql_real_escape_string($_POST["department"]));
		
$rsUpdate = mysql_query("UPDATE staffdetails
	SET  staffname = '$staffname',  staffid = '$staffid',  mobileno = '$mobileno',  emailid = '$emailid',  address = '$address',  qualification = '$qualification',  designation = '$designation',  experience = '$experience',  imagepath = '$imagepath',  doj = '$doj',  department = '$department'
	WHERE staffid = '$staffid' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>

<?php




include('../include/footer.php');




?>
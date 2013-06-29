<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');

?>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("../connect.php");

$studentid = $_POST['studentid'];

$studentname = trim(mysql_real_escape_string($_POST["studentname"]));
		$studentid = trim(mysql_real_escape_string($_POST["studentid"]));
		$mobileno = trim(mysql_real_escape_string($_POST["mobileno"]));
		$fathermobileno = trim(mysql_real_escape_string($_POST["fathermobileno"]));
		$email = trim(mysql_real_escape_string($_POST["email"]));
		$address = trim(mysql_real_escape_string($_POST["address"]));
		$imagepath = trim(mysql_real_escape_string($_POST["imagepath"]));
		$yearofjoining = trim(mysql_real_escape_string($_POST["yearofjoining"]));
		$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$department = trim(mysql_real_escape_string($_POST["department"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$section = trim(mysql_real_escape_string($_POST["section"]));
		
$rsUpdate = mysql_query("UPDATE studentdetails
	SET  studentname = '$studentname',  studentid = '$studentid',  mobileno = '$mobileno',  fathermobileno = '$fathermobileno',  email = '$email',  address = '$address',  imagepath = '$imagepath',  yearofjoining = '$yearofjoining',  coursename = '$coursename',  department = '$department',  year = '$year',  section = '$section'
	WHERE studentid = '$studentid' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
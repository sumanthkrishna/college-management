
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

$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$departmentname = trim(mysql_real_escape_string($_POST["departmentname"]));
		$departmentid = trim(mysql_real_escape_string($_POST["departmentid"]));
		$yearno = trim(mysql_real_escape_string($_POST["yearno"]));
		$noofsections = trim(mysql_real_escape_string($_POST["noofsections"]));
		
$results = mysql_query("INSERT INTO departmentdetails (id, coursename, departmentname, departmentid, yearno, noofsections)
	VALUES ('', '$coursename', '$departmentname', '$departmentid', '$yearno', '$noofsections')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
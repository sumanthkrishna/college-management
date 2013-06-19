<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$branchname = trim(mysql_real_escape_string($_POST["branchname"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$semester = trim(mysql_real_escape_string($_POST["semester"]));
		$subjectname = trim(mysql_real_escape_string($_POST["subjectname"]));
		$subjectid = trim(mysql_real_escape_string($_POST["subjectid"]));
		$staticid = trim(mysql_real_escape_string($_POST["staticid"]));
		
$results = mysql_query("INSERT INTO subjectdetails (id, coursename, branchname, year, semester, subjectname, subjectid, staticid)
	VALUES ('', '$coursename', '$branchname', '$year', '$semester', '$subjectname', '$subjectid', '$staticid')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
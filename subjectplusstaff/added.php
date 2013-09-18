<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');

?><?php

include("connect.php");

$staffid = trim(mysql_real_escape_string($_POST["staffid"]));
    	$courseid = trim(mysql_real_escape_string($_POST["courseid"]));
		$branchid = trim(mysql_real_escape_string($_POST["branchid"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$semester = trim(mysql_real_escape_string($_POST["semester"]));
		$section = trim(mysql_real_escape_string($_POST["section"]));
		$subjectid = trim(mysql_real_escape_string($_POST["subjectid"]));
		
$results = mysql_query("INSERT INTO subjectplusstaff (id, staffid, courseid, branchid, year, semester, section, subjectid)
	VALUES ('', '$staffid', '$courseid', '$branchid', '$year', '$semester', '$section', '$subjectid')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>

<?php


include('../include/footer.php');


?>
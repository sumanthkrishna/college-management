<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');

?>
<?php


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
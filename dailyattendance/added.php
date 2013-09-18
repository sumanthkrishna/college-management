<?php


include("connect.php");

$studentid = trim(mysql_real_escape_string($_POST["studentid"]));
		$subjectid = trim(mysql_real_escape_string($_POST["subjectid"]));
		$date = trim(mysql_real_escape_string($_POST["date"]));
		$period = trim(mysql_real_escape_string($_POST["period"]));
		
$results = mysql_query("INSERT INTO dailyattendance (id, studentid, subjectid, date, period)
	VALUES ('', '$studentid', '$subjectid', '$date', '$period')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
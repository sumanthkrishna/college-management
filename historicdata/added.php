<?php

include("connect.php");

$studentid = trim(mysql_real_escape_string($_POST["studentid"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$semester = trim(mysql_real_escape_string($_POST["semester"]));
		$percentage = trim(mysql_real_escape_string($_POST["percentage"]));
		
$results = mysql_query("INSERT INTO historicdata (id, studentid, year, semester, percentage)
	VALUES ('', '$studentid', '$year', '$semester', '$percentage')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
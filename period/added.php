<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("../connect.php");

$date = trim(mysql_real_escape_string($_POST["date"]));
		$period = trim(mysql_real_escape_string($_POST["period"]));
		$subjectcode = trim(mysql_real_escape_string($_POST["subjectcode"]));
		$staffid = trim(mysql_real_escape_string($_POST["staffid"]));
		
$results = mysql_query("INSERT INTO perioddetails (id, date, period, subjectcode, staffid)
	VALUES ('', '$date', '$period', '$subjectcode', '$staffid')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
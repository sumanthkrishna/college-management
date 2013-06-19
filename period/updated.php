<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$id = $_POST['id'];

$date = trim(mysql_real_escape_string($_POST["date"]));
		$period = trim(mysql_real_escape_string($_POST["period"]));
		$subjectcode = trim(mysql_real_escape_string($_POST["subjectcode"]));
		$staffid = trim(mysql_real_escape_string($_POST["staffid"]));
		
$rsUpdate = mysql_query("UPDATE perioddetails
	SET  date = '$date',  period = '$period',  subjectcode = '$subjectcode',  staffid = '$staffid'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>

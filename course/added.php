
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
		$courseid = trim(mysql_real_escape_string($_POST["courseid"]));
		$noofyears = trim(mysql_real_escape_string($_POST["noofyears"]));
		
$results = mysql_query("INSERT INTO coursedetails (id, coursename, courseid, noofyears)
	VALUES ('', '$coursename', '$courseid', '$noofyears')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
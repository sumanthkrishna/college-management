<?php


include("connect.php");

$id = $_POST['id'];

$studentid = trim(mysql_real_escape_string($_POST["studentid"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$semester = trim(mysql_real_escape_string($_POST["semester"]));
		$percentage = trim(mysql_real_escape_string($_POST["percentage"]));
		
$rsUpdate = mysql_query("UPDATE historicdata
	SET  studentid = '$studentid',  year = '$year',  semester = '$semester',  percentage = '$percentage'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>

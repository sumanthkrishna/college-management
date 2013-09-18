
<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>
<?php


include("connect.php");

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
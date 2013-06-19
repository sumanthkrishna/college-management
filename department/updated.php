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

$id = $_POST['id'];

$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$departmentname = trim(mysql_real_escape_string($_POST["departmentname"]));
		$departmentid = trim(mysql_real_escape_string($_POST["departmentid"]));
		$yearno = trim(mysql_real_escape_string($_POST["yearno"]));
		$noofsections = trim(mysql_real_escape_string($_POST["noofsections"]));
		
$rsUpdate = mysql_query("UPDATE departmentdetails
	SET  coursename = '$coursename',  departmentname = '$departmentname',  departmentid = '$departmentid',  yearno = '$yearno',  noofsections = '$noofsections'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
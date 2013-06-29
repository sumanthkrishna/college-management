<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');
?>
<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("../connect.php");

$username = trim(mysql_real_escape_string($_POST["username"]));
		$password = trim(mysql_real_escape_string($_POST["password"]));
		$permission = trim(mysql_real_escape_string($_POST["permission"]));
		
$results = mysql_query("INSERT INTO logindetails (id, username, password, permission)
	VALUES ('', '$username', '$password', '$permission')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }

?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
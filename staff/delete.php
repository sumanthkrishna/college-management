<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');




?>

<?php 
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$staffid = $_GET['staffid'];

mysql_query("DELETE FROM staffdetails WHERE staffid = '$staffid' ");
mysql_close();

echo "Entry deleted";
?>

<a href="index.php">Back to index</a>

<?php




include('../include/footer.php');




?>
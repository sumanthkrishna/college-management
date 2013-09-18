<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');




?>

<?php 

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
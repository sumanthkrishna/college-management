<?php 

session_start();
include('../auth.php');
include("connect.php");

$id = $_GET['id'];

mysql_query("DELETE FROM studentdetails WHERE id = '$id' ");
mysql_close();

echo "Entry deleted";
?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
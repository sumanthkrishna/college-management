<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');




?>




<?php


include("connect.php");

$id = $_POST['id'];

$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$courseid = trim(mysql_real_escape_string($_POST["courseid"]));
		$noofyears = trim(mysql_real_escape_string($_POST["noofyears"]));
		
$rsUpdate = mysql_query("UPDATE coursedetails
	SET  coursename = '$coursename',  courseid = '$courseid',  noofyears = '$noofyears'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>

<?php


include('../include/footer.php');


?>
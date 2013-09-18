<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');

?>
<?php


include("connect.php");

$subjectid = $_POST['subjectid'];

$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$branchname = trim(mysql_real_escape_string($_POST["branchname"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$semester = trim(mysql_real_escape_string($_POST["semester"]));
		$subjectname = trim(mysql_real_escape_string($_POST["subjectname"]));
		$subjectid = trim(mysql_real_escape_string($_POST["subjectid"]));
		$staticid = trim(mysql_real_escape_string($_POST["staticid"]));
		
$rsUpdate = mysql_query("UPDATE subjectdetails
	SET  coursename = '$coursename',  branchname = '$branchname',  year = '$year',  semester = '$semester',  subjectname = '$subjectname',  subjectid = '$subjectid',  staticid = '$staticid'
	WHERE subjectid = '$subjectid' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>

<?php


include('../include/footer.php');


?>
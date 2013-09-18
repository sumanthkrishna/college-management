<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>
<?php


include("connect.php");

$id = $_POST['id'];

$username = trim(mysql_real_escape_string($_POST["username"]));
		$password = trim(mysql_real_escape_string($_POST["password"]));
		$permission = trim(mysql_real_escape_string($_POST["permission"]));
		
$rsUpdate = mysql_query("UPDATE logindetails
	SET  username = '$username',  password = '$password',  permission = '$permission'
	WHERE id = '$id' ");

if($rsUpdate) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error()); }
?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>
<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>
<?php


include("connect.php");

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
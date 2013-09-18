<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>
<a href="add.php">Add entry</a><br>
<br>

<?php


include("connect.php");

$result = mysql_query("SELECT * FROM logindetails ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$username = stripslashes(mysql_result($result,$i,"username"));
		$password = stripslashes(mysql_result($result,$i,"password"));
		$permission = stripslashes(mysql_result($result,$i,"permission"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$username.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
<?php


include('../include/footer.php');


?>
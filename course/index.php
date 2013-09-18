<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../admin/leftdiv.php');




?>


<a href="add.php">Add entry</a><br>
<br>

<?php


include("connect.php");

$result = mysql_query("SELECT * FROM coursedetails ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$coursename = stripslashes(mysql_result($result,$i,"coursename"));
		$courseid = stripslashes(mysql_result($result,$i,"courseid"));
		$noofyears = stripslashes(mysql_result($result,$i,"noofyears"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$coursename.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
<?php


include('../include/footer.php');


?>
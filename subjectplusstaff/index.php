<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?><a href="add.php">Add entry</a><br>
<br>

<?php


include("connect.php");

$result = mysql_query("SELECT * FROM subjectplusstaff ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
    $staffid = stripslashes(mysql_result($result,$i,"staffid"));
		$courseid = stripslashes(mysql_result($result,$i,"courseid"));
		$branchid = stripslashes(mysql_result($result,$i,"branchid"));
		$year = stripslashes(mysql_result($result,$i,"year"));
		$semester = stripslashes(mysql_result($result,$i,"semester"));
		$section = stripslashes(mysql_result($result,$i,"section"));
		$subjectid = stripslashes(mysql_result($result,$i,"subjectid"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$staffid.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
<?php


include('../include/footer.php');


?>
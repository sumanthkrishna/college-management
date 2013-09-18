<a href="add.php">Add entry</a><br>
<br>

<?php


include("connect.php");

$result = mysql_query("SELECT * FROM historicdata ");
$num = mysql_num_rows ($result);

if ($num > 0 ) {
$i=0;
while ($i < $num) {

$id = stripslashes(mysql_result($result,$i,"id"));
	$studentid = stripslashes(mysql_result($result,$i,"studentid"));
		$year = stripslashes(mysql_result($result,$i,"year"));
		$semester = stripslashes(mysql_result($result,$i,"semester"));
		$percentage = stripslashes(mysql_result($result,$i,"percentage"));
		
	$row .= '<tr>
	<td><a href="update.php?id='.$id.'">'.$studentid.'</a></td>
	<td><a href="delete.php?id='.$id.'">Delete</a></td>
	</tr>';
	
++$i; }} else { $row = '<tr><td colspan="2" align="center">Nothing found</td></tr>'; }

mysql_close();
?>
<table border="1" cellpadding="3" cellspacing="0"><? echo $row ?></table>
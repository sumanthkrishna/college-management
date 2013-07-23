<?php
include('../admin/adminheader.php');
include('leftdiv1.php');
include('../connect.php');?>

<table width="60%">
<tr>

	<?php$studentid=$session['username'];
	$query=mysql_query("select year,semester from student where studentid='$studentid'");
	$te1=mysql_fetch_array($query);
	$yr=$te1['year'];
	$se=$te1['semester'];
	$query1=mysql_query("select subjectid from subjectdetails where year='$yr' and semester='$sem'");
	


?>
<?php
include('../include/footer.php');
?>
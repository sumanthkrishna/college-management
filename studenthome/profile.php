<?php
session_start();
include('connect.php');
$studentid=$_SESSION['username'];

$result = mysql_query("SELECT * FROM studentdetails WHERE studentid='$studentid'");
$data= mysql_fetch_array($result);
?>
<?php

include('../include/header.php');
include('leftdiv.php');

?>

<table>
	<tr>
		<td>Student name:
		<td><?php echo $data['studentname']; ?>
	</tr>
	<tr>
		<td>Student id:
		<td><?php echo $data['studentid']; ?>
	</tr>
	<tr>
		<td>Mobile no:
		<td><?php echo $data['mobileno']; ?>
	</tr>
	<tr>
		<td>Father mobile no:
		<td><?php echo $data['fathermobileno']; ?>
	</tr>
	<tr>
		<td>Email id:
		<td><?php echo $data['email']; ?>
	</tr>
	<tr>
		<td>Address:
		<td><?php echo $data['address']; ?>
	</tr>
	<tr>
		<td>Image:
		<td><img width=100px;height=100;  src="../student/<?php echo $data['imagepath']; ?> ">
	</tr>
	<tr>
		<td>Year of joining:
		<td><?php echo $data['doj']; ?>
	</tr>
	<tr>
		<td>Course name:
		<td><?php echo $data['coursename']; ?>
	</tr>
	<tr>
		<td>Department:
		<td><?php echo $data['department']; ?>
	</tr>
	<tr>
		<td>Year:
		<td><?php echo $data['year']; ?>
	</tr>
	<tr>
		<td>Section:
		<td><?php echo $data['section']; ?>
	</tr>
	
</table>
<?php


include('../include/footer.php');



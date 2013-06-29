<?php
session_start();
include('../connect.php');
$staffid=$_SESSION['username'];

$result = mysql_query("SELECT * FROM staffdetails WHERE staffname='$staffid'");
$data= mysql_fetch_array($result);
?>

<?php

include('../admin/adminheader.php');
include('leftdiv.php');

?>

<table>
	<tr>
		<td>Staff name:
		<td><?php echo $data['staffname']; ?>
	</tr>
	<tr>
		<td>Staff id:
		<td><?php echo $data['staffid']; ?>
	</tr>
	<tr>
		<td>Mobile no:
		<td><?php echo $data['mobileno']; ?>
	</tr>
	<tr>
		<td>Email id:
		<td><?php echo $data['emailid']; ?>
	</tr>
	<tr>
		<td>Address:
		<td><?php echo $data['address']; ?>
	</tr>
	<tr>
		<td>ualification:
		<td><?php echo $data['qualification']; ?>
	</tr>
	<tr>
		<td>Designation:
		<td><?php echo $data['designation']; ?>
	</tr>
	<tr>
		<td>Experience:
		<td><?php echo $data['experience']; ?>
	</tr>
	<tr>
		<td>Image:
		<td><img width=100px; height=100px; src="../staff/<?php echo $data['imagepath']; ?>">
	</tr>
	<tr>
		<td>Date of joining:
		<td><?php echo $data['doj']; ?>
	</tr>
	<tr>
		<td>Department:
		<td><?php echo $data['department']; ?>
	</tr>
</table>

<?php


include('../include/footer.php');


?>
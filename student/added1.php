<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("connect.php");

$studentname = trim(mysql_real_escape_string($_POST["studentname"]));
		$studentid = trim(mysql_real_escape_string($_POST["studentid"]));
		$mobileno = trim(mysql_real_escape_string($_POST["mobileno"]));
		$fathermobileno = trim(mysql_real_escape_string($_POST["fathermobileno"]));
		$email = trim(mysql_real_escape_string($_POST["email"]));
		$address = trim(mysql_real_escape_string($_POST["address"]));
//		$imagepath = trim(mysql_real_escape_string($_POST["imagepath"]));
		$yearofjoining = trim(mysql_real_escape_string($_POST["yearofjoining"]));
		$coursename = trim(mysql_real_escape_string($_POST["coursename"]));
		$department = trim(mysql_real_escape_string($_POST["department"]));
		$year = trim(mysql_real_escape_string($_POST["year"]));
		$section = trim(mysql_real_escape_string($_POST["section"]));
		




define ("MAX_SIZE","1000"); 
function getExtension($str)
{
     $i = strrpos($str,".");
     if (!$i) { return ""; }
	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
 
$errors=0;
$image=$_FILES['image']['name'];
if ($image) 
{
	$filename = stripslashes($_FILES['image']['name']);
	$extension = getExtension($filename);
	$extension = strtolower($extension);
	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") 
		&& ($extension != "gif")&& ($extension != "JPG") && ($extension != "JPEG") 
		&& ($extension != "PNG") && ($extension != "GIF")) 
	{
		echo '<h3>Unknown extension!</h3>';
		$errors=1;
	}
	else
	{
		$size=filesize($_FILES['image']['tmp_name']);
 
		if ($size > MAX_SIZE*1024)
		{
			echo '<h4>You have exceeded the size limit!</h4>';
			$errors=1;
		}
 
		$image_name=time().'.'.$extension;
		$newname="images/".$image_name;
 
		$copied = copy($_FILES['image']['tmp_name'], $newname);
		if (!$copied) 
		{
			echo '<h3>Copy unsuccessfull!</h3>';
			$errors=1;
		}
		else echo '<h3>uploaded successfull!</h3>';
 
$results = mysql_query("INSERT INTO studentdetails (id, studentname, studentid, mobileno, fathermobileno, email, address, imagepath, yearofjoining, coursename, department, year, section)
    VALUES ('', '$studentname', '$studentid', '$mobileno', '$fathermobileno', '$email', '$address', '$newname', '$yearofjoining', '$coursename', '$department', '$year', '$section')");


if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }


	}
?> 
<?php
include('../include/footer.php');
?>
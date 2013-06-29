<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');
?>

<?php
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.

include("../connect.php");

$staffname = trim(mysql_real_escape_string($_POST["staffname"]));
    	$staffid = trim(mysql_real_escape_string($_POST["staffid"]));
		$mobileno = trim(mysql_real_escape_string($_POST["mobileno"]));
		$emailid = trim(mysql_real_escape_string($_POST["emailid"]));
		$address = trim(mysql_real_escape_string($_POST["address"]));
		$qualification = trim(mysql_real_escape_string($_POST["qualification"]));
		$designation = trim(mysql_real_escape_string($_POST["designation"]));
		$experience = trim(mysql_real_escape_string($_POST["experience"]));
//		$imagepath = trim(mysql_real_escape_string($_POST["imagepath"]));
		$doj = trim(mysql_real_escape_string($_POST["doj"]));
		$department = trim(mysql_real_escape_string($_POST["department"]));
    	



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
 

$results = mysql_query("INSERT INTO staffdetails (id, staffname, staffid, mobileno, emailid, address, qualification, designation, experience, imagepath, doj, department)
    VALUES ('', '$staffname', '$staffid', '$mobileno', '$emailid', '$address', '$qualification', '$designation', '$experience', '$newname', '$doj', '$department')");

if($results) { echo "Successfully Added"; } else { die('Invalid query: '.mysql_error()); }


	}
 
	//Display image
	$rs=mysql_query("select * from address");
	if($rs)
		while($row=mysql_fetch_array($rs))
		{
		 ?>
		 <img width="150" src="<?php echo $row['path'];?>"><br>
		 <?php 
		}
}
?>


<a href="index.php">Back to index</a>

		
<?php




include('../include/footer.php');




?>
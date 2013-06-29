<?php

include('../connect.php');


$suid=trim(mysql_real_escape_string($_POST["subid"]));
$stid=trim(mysql_real_escape_string($_POST["stuid"]));
$imr=trim(mysql_real_escape_string($_POST["inmr"]));
$emr=trim(mysql_real_escape_string($_POST["exmr"]));
$mrre=trim(mysql_real_escape_string($_POST["mrks"]));
$tot=trim(mysql_real_escape_string($_POST["total"]));
$cre=trim(mysql_real_escape_string($_POST["credits"]));
$res=trim(mysql_real_escape_string($_POST["result"]));


	$up=mysql_query("insert into 'examresults'('id','subjectid,'studentid','internalmarks','externalmarks','marksrequired',
		    'total','credits','result')VALUES('','$suid','$stid','$imr', '$emr',
			'$mrre','$tot','$cre','$res')");
	if(isset($up))
	{
		echo "saved";
	}
	else
	{
		echo "re-enter details"; 
	}
?>
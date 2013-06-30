<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../connect.php');
?>




<html>
<head>
<title>Results - Admin </title>
</head>
<body>
<h1>Update Results here...</h1>

<?php

 $subid=$_POST['subjectid'];
 $te=mysql_query("select marksrequired,year,semester from subjectdetails where subjectid='$subid'");
  $te1=mysql_fetch_array($te);
  $yr=$te1['year'];
  $se=$te1['semester'];
  $mrks=$te1['marksrequired']; 
  
  $te2=mysql_query("select studentid from student where year='$yr' and semester='$se'");
  
  ?> 

<table width="60%" border="1" cellpadding="10">
	<tr>
		<td>Student ID</td>
		<td>Subject Code</td>		
		<td>Internal</td>
		<td>external</td>
		<td>marks required</td>
		<td>total</td>				
		<td>Credits</td>	
		<td colspan="3">Result</td>
		

	</tr>


	<?php  
    while($te3=mysql_fetch_row($te2))
	{
     $stuid=$te3[0];
	 echo "<form  method='post'>";?>  

	<tr>
		<td><label name="stuid" value="<?php echo "$stuid";?>" readonly> <?php echo "$stuid";?></label></td>
		<td><label type=text name="subid" value="<?php echo "$subid";?>" readonly><?php echo "$subid";?></label> </td>		
		<td><input type="text" name="inmr"/></td>
		<td><input type="text"name="exmr"/></td>
		<td><label type=text name="mrks" value="<?php echo "$mrks";?>" readonly><?php echo "$mrks";?></label> </td>
		<td><input type="text" name="total"/></td>
		<td><input type="text" name="credits"/></td>	
		<td>
                    <select name="result"> 
                    <option value="PASS">PASS</option>
                    <option value="FAIL">FAIL</option></select>		
		</td>
		<td><input type="submit" value="Save" onclick="<?php update();?>"/></td>
		<td><input type="reset" value="Reset" /></td>	
	</tr>
		</form>	
  <?php 
     } 
?>	

  </table>

<?php include('../include/footer.php')?>
</body>
</html>


<?php function update()
{




$imr=trim(mysql_real_escape_string($_POST["inmr"]));
$emr=trim(mysql_real_escape_string($_POST["exmr"]));
$mrre=trim(mysql_real_escape_string($_POST["mrks"]));
$tot=trim(mysql_real_escape_string($_POST["total"]));
$cre=trim(mysql_real_escape_string($_POST["credits"]));
$res=trim(mysql_real_escape_string($_POST["result"]));


	$up=mysql_query("insert into 'examresults'('id','subjectid,'studentid','internalmarks','externalmarks','marksrequired',
		    'total','credits','result')VALUES('','$subid','$stuid','$imr', '$emr',
			'$mrre','$tot','$cre','$res')");
	 
	
}
?>
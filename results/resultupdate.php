<?php
session_start();
include('../auth.php');
include('../connect.php');

if(isset($_POST['subjectid'])){
 $subid=$_POST['subjectid'];
 $te=mysql_query("select marksrequired,year,semester from subjectdetails where subjectid='$subid'");
  $te1=mysql_fetch_array($te);
  $yr=$te1['year'];
  $se=$te1['semester'];
  $mrks=$te1['marksrequired']; 
  
  $te2=mysql_query("select studentid from student where year='$yr' and semester='$se'");
  
  ?> 

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
	?>  
	<tr>
		<td><label name="lstuid" value="<?php echo "$stuid";?>" readonly> <?php echo "$stuid";?></label></td>
		<td><label type="text" name="lsubid" value="<?php echo "$subid";?>" readonly><?php echo "$subid";?></label> </td>		
		<td><input type="text" name="inmr" id="inmr_<?php echo "$stuid";?>" size="5" maxlength="5"/></td>
		<td><input type="text" name="exmr" id="exmr_<?php echo "$stuid";?>" size="5" maxlength="5"/></td>
		<td><label type="text" value="<?php echo "$mrks";?>" readonly><?php echo "$mrks";?></label> </td>
		<td><input type="text" name="total" id="total_<?php echo "$stuid";?>" size="5" maxlength="5"/></td>
		<td><input type="text" name="credits" id="credits_<?php echo "$stuid";?>" size="5" maxlength="5"/></td>	
		<td>
		<select name="result" id="result"> 
			<option value="PASS">PASS</option>
			<option value="FAIL">FAIL</option>
		</select>		
		</td>
		<td><input type="hidden" name="stuid" id="stuid_<?php echo "$stuid";?>" value="<?php echo "$stuid";?>"/>
		<td><input type="hidden" name="mrks" id="mrks_<?php echo "$stuid";?>" value="<?php echo "$mrks";?>"/>
		<input type="hidden" name="subid" id="subid_<?php echo "$stuid";?>" value="<?php echo "$subid";?>"/>
		<input type="button" value="Save" name="save" onclick="savecontent('<?php echo "$stuid";?>');"/></td>
		<td><input type="reset" value="Reset" onclick="freset('<?php echo "$stuid";?>');"/></td>	
	</tr>
  <?php 
     } 
 }
 
 if($_POST['savecontent'] == '1'){
	$subid=trim(mysql_real_escape_string($_POST["subid"]));
	$imr=trim(mysql_real_escape_string($_POST["inmr"]));
	$emr=trim(mysql_real_escape_string($_POST["exmr"]));
	$mrre=trim(mysql_real_escape_string($_POST["mrks"]));
	$tot=trim(mysql_real_escape_string($_POST["total"]));
	$cre=trim(mysql_real_escape_string($_POST["credits"]));
	$res=trim(mysql_real_escape_string($_POST["result"]));
	$stuid=trim(mysql_real_escape_string($_POST["stuid"]));

	$result=mysql_query("insert into examresults(subjectid,studentid,internalmarks,externalmarks,marksrequired,total,credits,result) 
			VALUES('$subid','$stuid','$imr', '$emr', '$mrre','$tot','$cre','$res')");
	$up = mysql_insert_id();
	if($up)
		echo '1';
	else
		echo '0';
 }
?>	

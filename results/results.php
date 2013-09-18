<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../connect.php');
include('../admin/leftdiv.php');
?>

<script type="text/javascript">
	function getresult()
	{
		var psubid = $('#subjectid').val();
		$.ajax({
            type: "POST",
            url: 'resultupdate.php',
            data: {
                subjectid: psubid, 
            },
            success: function (msg) {
					$('#resultcontent').html(msg);
            }
        });
	}
	
	function savecontent(stid)
	{
		var pinmr = $('#inmr_'+stid).val();
		var pexmr = $('#exmr_'+stid).val();
		var pmrks = $('#mrks_'+stid).val();
		var ptotal = $('#total_'+stid).val();
		var pcredits = $('#credits_'+stid).val();
		var presult = $('#result').val();
		var psubid = $('#subid_'+stid).val();
		var pstuid = $('#stuid_'+stid).val();
		
		$.ajax({
            type: "POST",
            url: 'resultupdate.php',
            data: {
				savecontent:'1',
                inmr: pinmr, 
                exmr: pexmr, 
                mrks: pmrks, 
                total: ptotal, 
                credits: pcredits, 
                result: presult, 
                subid: psubid, 
                stuid: pstuid, 
            },
            success: function (msg) {
					if(msg == 1)
					{
						alert('Information saved!');
						$('#inmr_'+stid).val('');
						$('#exmr_'+stid).val('');
						$('#total_'+stid).val('');
						$('#credits_'+stid).val('');
					}
						
            }
        });
	}
	
	function freset(stid)
	{
		$('#inmr_'+stid).val('');
		$('#exmr_'+stid).val('');
		$('#total_'+stid).val('');
		$('#credits_'+stid).val('');
	}
</script>
<div style="margin-left:20px; height:100%;width:70%;float:left;" id="contentr">
<h1>Update Results here...</h1>

<select name="subjectid" id="subjectid"> 
 <option value="A1201">A1201</option>
  <option value="A1206">A1206</option>
  <option value="A1240">A1240</option>
</select>
<input type="button" value="Apply Filter" onclick="getresult();"/>
<br><br>
<table border="1" cellpadding="10" id="resultcontent" style="float:left;width:700px;">
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
	$te=mysql_query("select marksrequired,year,semester from subjectdetails where subjectid='A1201'");
	$te1=mysql_fetch_array($te);
	$yr=$te1['year'];
	$se=$te1['semester'];
	$mrks=$te1['marksrequired']; 
	  
	$te2=mysql_query("select studentid from student where year='$yr' and semester='$se'");
  
    while($te3=mysql_fetch_row($te2))
	{
     $stuid=$te3[0];
	 ?>  
	<tr>
		<td><label name="lstuid" value="<?php echo "$stuid";?>" readonly> <?php echo "$stuid";?></label></td>
		<td><label type="text" name="lsubid" value="<?php echo "A1201";?>" readonly><?php echo "A1201";?></label> </td>		
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
		<input type="hidden" name="mrks" id="mrks_<?php echo "$stuid";?>" value="<?php echo "$mrks";?>"/>
		<input type="hidden" name="subid" id="subid_<?php echo "$stuid";?>" value="<?php echo "$subid";?>"/>
		<input type="button" value="Save" name="save" onclick="savecontent('<?php echo "$stuid";?>');"/></td>
		<td><input type="reset" value="Reset" onclick="freset('<?php echo "$stuid";?>');"/></td>	
	</tr>
  <?php 
     } 
?>	
</table>
</div>

<?php
include('../include/footer.php');
?>

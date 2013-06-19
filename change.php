<?php

session_start();

include('auth.php');
?>

<html>
<head>
<title>change password</title>


<script>
function validateForm()
{
var x=document.forms["myForm"]["oldpassword"].value;
var y=document.forms["myForm"]["newpassword"].value;
var z=document.forms["myForm"]["renewpassword"].value;





if (x==null || x==""  )
  {
  alert("old Password must be filled out");
  return false;
  }
 
if (y==null || z==""  )
  {
  alert("new Password must be filled out");
  return false;
  }
 
if (z==null || z==""  )
  {
  alert("reentered new Password must be filled out");
  return false;
  }
  
 if( y!=z)
{
  alert("new password not matched");

  return false;
} 
  
}
</script>





</head>
<body>
<form name="myForm" action="changepassword.php" onsubmit="return validateForm()" method="post">
<table>
	<tr>
		<td>Please Enter old password</td>
		<td><input type=text name=oldpassword ></td>
	</tr>
	<tr>
		<td>Please Enter New password</td>
		<td><input type=text name=newpassword ></td>
	</tr>
	<tr>
		<td>Please ReeNter New password</td>
		<td><input type=text name=renewpassword ></td>
	</tr>
    <tr> 
		<td><input type=submit>
		
	 
	</tr>
	
	
	
	
</table>
</form>
</body>
</html>
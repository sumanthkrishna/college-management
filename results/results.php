<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../connect.php');
include('../admin/leftdiv.php');
?>




<html>
<head>
<title>Results - Admin </title></head>
<body>
<h1>Update Results here...</h1>
<form action="resultupdate.php" method="post">

<select name="subjectid"> 
 <option value="A1201">A1201</option>
  <option value="A1206">A1206</option>
  <option value="A1240">A1240</option>
</select>
<input type="Submit" value="Apply Filter"/>
<br><br>
</form>

</body>
</html>
<?php
include('../include/footer.php');
?>

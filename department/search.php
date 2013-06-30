<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../include/leftdiv.php');

?>

<form method="get" action="update1.php">

ENter course id:<input type="text" name="courseid">
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
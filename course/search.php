<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../include/leftdiv.php');

?>

<form method="get" action="update.php">

ENter staff id:<input type="text" name="staffid">
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('../include/leftdiv.php');

?>

<form method="get" action="update.php">

ENter subject id:<input type="text" name="subjectid">
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
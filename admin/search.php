<?php
session_start();
include('../auth.php');

include('../admin/adminheader.php');

?>

<form method="get" action="../dailyattendance/update.php">

ENter student id:<input type="text" name="studentid"><br>
please Pick date<input type="date" name="date"><br>
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
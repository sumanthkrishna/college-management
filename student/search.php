<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');
include('leftdiv.php');

?>

<form method="get" action="update.php">

ENter student id:<input type="text" name="studentid">
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
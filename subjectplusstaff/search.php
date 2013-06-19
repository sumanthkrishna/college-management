<?php
session_start();
include('../auth.php');
include('../include/header.php');
include('leftdiv.php');

?>

<form method="get" action="update1.php">

Enter staff id:<input type="text" name="staffid">
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
<?php
session_start();
include('../auth.php');
include('../admin/adminheader.php');

?>

<form method="get" action="update1.php">

Enter id:<input type="text" name="username">
<input type="submit">


</form>







<?php


include('../include/footer.php');


?>
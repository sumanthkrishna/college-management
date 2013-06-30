<?php ob_start();
session_start();
include('../auth.php');
include('adminheader.php');
?>

<?php


echo "welcome to admin panel...!";
include('leftdiv.php');

include('../include/footer.php');
?>
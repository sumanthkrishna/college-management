<?php
$hostname='***'; //// specify host, i.e. 'localhost'
$user='****'; //// specify username
$pass='****'; //// specify password
$dbase='****'; //// specify database name
$connection = mysql_connect("$hostname" , "$user" , "$pass") 
or die ("Can't connect to MySQL");
$db = mysql_select_db($dbase , $connection) or die ("Can't select database.");
?>
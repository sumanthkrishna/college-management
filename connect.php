<?php

//$con=mysql_connect("rgmdatabase.db.10942056.hostedresource.com","rgmdatabase","rgmdatabase1A@");
$con=mysql_connect("localhost","root","");

if(!($con))
{
echo "connection failed";
}


//$select=mysql_select_db("rgmdatabase");
$select=mysql_select_db("rgm_db");
?>
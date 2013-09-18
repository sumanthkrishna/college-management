<?php

$con=mysql_connect("rgmdatabase.db.10942056.hostedresource.com","rgmdatabase","rgmdatabase1A@");
if(!($con))
{
echo "connection failed";
}


$select=mysql_select_db("rgmdatabase");

?>
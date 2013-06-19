<?php  
 session_start(); 
 
 //remove all the variables in the session 
 session_unset(); 
 
 // destroy the session 
 session_destroy(); 
header("Location: login.php"); 
 ?> 
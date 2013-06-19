<?php ob_start();
session_start();
?><html>
<body>

<div id="container" style="width:100%;height=100%;">

<div id="header" style="background-color:#FFA500;height=20%">
<?php

if($_SESSION['permission']==1)
{
echo "<a href='../admin/adminhome.php'>Home</a>";
}
if($_SESSION['permission']==2)
{
echo "<a href='../staffhome/index.php'>Home</a>";
}
if($_SESSION['permission']==3)
{
echo "<a href='../studenthome/index.php'>Home</a>";
}
?>
<h1 style="margin-bottom:0;" align=center>Main Title of Web Page</h1>
<a href="../logout.php">Logout</a>
</div>

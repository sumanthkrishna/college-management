<?php
if(isset($_SESSION['permission'])&&$_SESSION['permission']==1)
{

}
else
{
header('Location:index.php');
}




?>
<?php

include('../include/header.php');
include('leftdiv.php');

?>
<?php
session_start();
$studentid=$_SESSION['username'];
$fromdate=$_GET['fromdate'];
$todate=$_GET['todate'];
include('connect.php');

?>

<table border='1'>
<tr>
    <td>date
    <td>period1
	<td>period2
	<td>period3
	<td>period4
	<td>period5
	<td>period6
	<td>period7
</tr>

	<?php


  date_default_timezone_set('UTC');
  $start_date = $fromdate;
  $end_date = $todate;
  $next_date = $start_date;

while(strtotime($next_date) <= strtotime($end_date))
  {
      
    echo "<tr>";
    echo "<td>".$next_date."</td>";

    
    $result=mysql_query("SELECT * FROM `dailyattendance` WHERE `studentid`='$studentid' and date ='$next_date'");
    
     while( $data=mysql_fetch_array($result))     
        {     
           $data1[]=$data[period];
    
        }


    if(empty($data1))
    {   
         echo "<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>";
    }else
    {
        
            for($i=1;$i<=7;$i++)
            {
            if(in_array($i,$data1))
                   { echo "<td>1</td>";}
             else
                   {echo "<td>0</td>";}
                 
            }
          
    
    
    
            
        }
    
       
            
        
        
     echo "</tr>";
unset($data1);

          $next_date = date ("Y-m-d", strtotime("+1 day", strtotime($next_date)));
  }
	?>

</table>
<?php

include('../include/footer.php');

?>

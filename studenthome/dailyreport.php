<?php

include('../admin/adminheader.php');
include('leftdiv.php');
//session_start();

?>

<form method="get" action="dailyreportexecute.php">
From date: <input type="text" name="fromdate"><br>
To date: <input type="text" name="todate"><br>
<input type="submit" value="submit">
</form>
<?php

include('../include/footer.php');

?>

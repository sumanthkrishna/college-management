<html>
<head>
<title> home </title>
</head>
<body>
welcomet
		<?php
		session_start();
		include('auth.php');

echo $_SESSION['id'];

?> user....<br>

<a href="attendance.php">Attendance</a><br>
<a href="results.php">Exam Results</a><br>
<a href="change.php">Change Password</a><br>
<a href="logout.php">Logout</a><br>
</body>
</html>
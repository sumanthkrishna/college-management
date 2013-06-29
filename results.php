<html>
<head>
<title>Login </title>
</head>
<body>
<form method="post" action="loginscript.php">
<table>
	<tr>
		<td>User type:
		<td><select name="permission">
				<option value="1">Admin</option>
				<option value="2">Staff</option>
				<option value="3">Student</option>
			</select>
	</tr>
    <tr>
		<td>Login ID: 
		<td><input type="text" name="username"> 
	</tr>
	<tr>
		<td>Password: 
		<td><input type="password" name="password">
	</tr>
	<tr>
		<td colspan=2 align=center><input type="submit" value="submit">
	</tr>
</table>
</form>
</body>
</html>
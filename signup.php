<!DOCTYPE HTML>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<form action="" method="post">
	<table>	
	<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo htmlentities($username); ?>"></td>
		</tr>
		<td>Password</td>
		<td><input type="password" name="password" value="<?php echo htmlentities($password); ?>"></td>
		<tr>
			<td>Confirm password</td>
			<td><input type="password" name="confirmpassword" value="<?php echo htmlentities($confirmpassword); ?>"></td>
		</tr>
		<tr>
			<td>First name</td>
			<td><input type="text" value="<?php echo htmlentities($firstname); ?>"></td>
		</tr>
		<tr>
			<td>Last name</td>
			<td><input type="text" value="<?php echo htmlentities($lastname); ?>"></td>
		</tr>
		<tr>
			<td>Email address</td>
			<td><input type="email" value="<?php echo htmlentities($email); ?>"></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="accept" required> I accept the terms and conditions
			</td>
		</tr>
		<tr colspan="2">
			<td><input type="submit" value="Signup"></td>
</table>
	</form>
</body>
</html>
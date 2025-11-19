<?php
	$username = $password = $confirmpassword = $firstname = $lastname = $email = "";

	if($_SERVER("REQUEST_METHOD") =="POST"){
		$username = $_POST['username']?? '';
		$password = $_POST['password']?? '';
		$confirmpassword = $_POST['confirmpassword']?? '';
		$firstname = $_POST['firstname']?? '';	
		$lastname = $_POST['lastname']?? '';
		$email = $_POST['email']?? '';
	}
 		if ($password !== $confirmpassword) {
        $message = "Passwords do not match!";
    	} else {
        $message = "Signup successful! Welcome, $firstname $lastname";
    }


?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Signup page</title>
</head>
<body>


<?php if (!empty($message)) : ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>

<form action="" method="post">
<table>	
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo htmlentities($username); ?>"></td>
    </tr>

    <tr>
        <td>Password</td>
        <td><input type="password" name="password" value=""></td>
    </tr>

    <tr>
        <td>Confirm password</td>
        <td><input type="password" name="confirmpassword" value=""></td>
    </tr>

    <tr>
        <td>First name</td>
        <td><input type="text" name="firstname" value="<?php echo htmlentities($firstname); ?>"></td>
    </tr>

    <tr>
        <td>Last name</td>
        <td><input type="text" name="lastname" value="<?php echo htmlentities($lastname); ?>"></td>
    </tr>

    <tr>
        <td>Email address</td>
        <td><input type="email" name="email" value="<?php echo htmlentities($email); ?>"></td>
    </tr>

    <tr>
        <td>
            <input type="checkbox" name="accept" required> I accept the terms and conditions
        </td>
    </tr>

    <tr>
        <td><input type="submit" value="Signup"></td>
    </tr>
</table>
</form>

</body>
</html>

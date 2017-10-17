<?php
	try {
    require('config.php');
} catch (Exception $e) {
    exit('Require failed! Error: '.$e);
}
	if (isset($_POST['signup-button'])) {
		$username = stripslashes($_POST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_POST['e-mail']);
		$email = mysqli_real_escape_string($con,$email);
		$password_1 = stripslashes($_POST['password_1']);
		$password_1 = mysqli_real_escape_string($con,$password_1);
		$password_2 = stripslashes($_POST['password_2']);
		$password_2 = mysqli_real_escape_string($con,$password_2);
		
		if ($password_1 != $password_2) {
			array_push($errors, '<p class="text" style="color: red;"><strong>Passwords</strong> arent the same</p>');
		}
		if (count($errors) > 0) {
			include("errors.php");
		}else {
			$password = md5($password_1);
			$query = "INSERT into `users` (userName, userPass, userEmail, creationDate) VALUES ('$username', '$password', '$email', CURDATE())";
			$result = mysqli_query($con,$query);
			if ($result) {
			echo '<p class="text" style="color: green;"><strong>You are registered successfully.</strong></p>';
			}else {}
		}
	}
?>
<?php
	require('config.php');
	session_start();
	if (isset($_POST['login-button'])) {
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE userName='$username' AND userPass='$password'";
			$result = mysqli_query($con,$query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				$row = mysqli_fetch_array($result);
				$date = $row['creationDate'];
				$user_id = $row['userId'];
				$rights = $row['is_admin'];
				$newDate = strtotime($date);
				$_SESSION['date'] = date('d.m.Y', $newDate);
				$_SESSION['user_id'] = $user_id;
				$_SESSION['rights'] = $rights;
				header('location: profile.php');
			}else{
				$_SESSION['error'] = "Wrong username or password";
			}
		}
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}
?>

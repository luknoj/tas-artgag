
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script type="text/javascript" src="js/popups.js"></script>
	<title>Page Title</title>
</head>
<body>
<div class="background"></div>
	<div class="login-panel">
		<div class="left">
			<div class="login-title">
				<span class="art">ART.</span><span class="gag">gag</span>
			</div>
		</div>
		<div class="right">
			<div class="container">
		    <div id="sign-up">
					<div class="heading">
						<h1>Sign up.</h1>
					</div>
					<?php include("php/register.php") ?>
					<form class="form-group" action="" method="post">
						<input type="email" name="e-mail" placeholder="Email" value="<?php echo $email; ?>"required>
						<input type="username" name="username" placeholder="Username" value="<?php echo $username; ?>"required>
						<input type="password" name="password_1" placeholder="Password" required>
						<input type="password" name="password_2" placeholder="Confirm password" required>
						<button type="submit" class="login" name="signup-button">Sign up</button>
						</div>
					</form>
					<form action="index.php">
							<input type="submit" id="login-back" class="back-login" value="Login" />
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

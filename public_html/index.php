
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
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
				<div id="login">
					<div class="heading">
						<h1>Login.</h1>
					</div>
					<?php include("php/login.php") ?>
					<form class="form-group" method="post" action="">
						<input  type="username" name="username" placeholder="Username" value="<?php echo $username; ?>"> 
						<input  type="password" name="password" placeholder="Password">
						<p class="text" style="text-align: right;">Forgot Password? <a href="">Retrive it!</a></p>
						<button type="submit" class="login" name="login-button">Sign in</button>
						<p class="text" style="padding-top: 10px;">Dont have account yet? <a href="signup.php" id="sign-up-link" name="sign-up-link">Sign up</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

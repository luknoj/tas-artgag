<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	include('./php/auth.php');
?>
<body>
<h1>Welcome on the page <?php echo $_SESSION['userName']?>!</h1>
<h2>This is a secured area.</h2>
<a href="logout.php">Logout</a>
</body>
</html>
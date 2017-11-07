<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<title>Artgag</title>
</head>
<body>
<div class="background"></div>
<nav class="navigation">
	<div class="logo">
		<span class="art">ART.</span><span class="gag">gag</span>
	</div>
	<ul>
    <li><a href="main.php">Hot</a></li>
		<li><a href="que.php">Waiting</a></li>
    <?php if (!isset($_SESSION['username'])) {?>
		<li class="login-button"><a href="index.php">Login</a></li>
    <?php }else{ ?>
    <li><a href="add_post.php">Add post</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="index.php?logout='1'">Log out</a></li>
    <?php } ?>
  </ul>
</nav>
<section class="main">
<?php include('php/hot_posts.php') ?>
</section>
<footer>
  <p class="footer">© 2017 Adam Mickiewicz University in Poznań</p>
</footer>
</body>

<?php session_start(); ?>
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
  <?php
    if (isset($_SESSION['username'])) {
  ?>
<div class="background"></div>
<nav class="navigation">
	<div class="logo">
		<span class="art">ART.</span><span class="gag">gag</span>
	</div>
	<ul>
		<li><a href="main.php">Hot</a></li>
		<li>Waiting</li>
    	<li><a href="add_post.php">Add post</a></li>
		<li><a href="index.php?logout='1'">Log out</a></li>
	</ul>
</nav>
<section class="main">
	<div class="container">
		<div class="content clearfix">
			<div class="avatar"><img src="https://i1.kwejk.pl/k/users/thumbs/default.png"></div>
			<div class="info">
				<p class="username">
					<?php
						echo $_SESSION['username'];
						unset($_SESSION['success']);
					?>
				</p>
				<p>
					<?php
				 		echo $_SESSION['date'];
				 	?>
				 </p>
				<p>Ilość postów</p>
				<p>Ilość komentarzy</p>
			</div>
			<div class="user-content">
				<p class="dft-btn" style="margin-right: 5px;">User posts</p>
				<p class="dft-btn">User comments</p>
			</div>
		</div>
	</div>
</section>
<footer>
  <p class="footer">© 2017 Adam Mickiewicz University in Poznań</p>
</footer>
<?php }
else {
  header('Location: index.php');
} ?>
</body>

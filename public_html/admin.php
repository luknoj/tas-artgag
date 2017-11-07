<?php include("php/administration.php") ?>
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
    if ($_SESSION['rights'] == 1) {
  ?>
<div class="background"></div>
<nav class="navigation">
	<div class="logo">
		<span class="art">ART.</span><span class="gag">gag</span>
	</div>
	<ul>
		<li><a href="main.php">Hot</a></li>
		<li><a href="que.php">Waiting</a></li>
    <li><a href="add_post.php">Add post</a></li>
    <li><a href="profile.php">Profile</a></li>
		<li><a href="index.php?logout='1'">Log out</a></li>
	</ul>
</nav>
<section class="main">
	<div class="container">
		<div class="content clearfix">
      <h1 class="heading-center">Post acceptation:</h1>
      <p class="s-title">Input post id in the filed which you want to edit:</p>
      <form class="form-group s-horizontal clearfix" action="" method="post">
        <p class="s-title">Acceptation:</p>
        <input class="simple-input"type="text" name="post_id" placeholder="Post Id" required>
        <button class="dft-btn" type="submit" name="accept_post" style="width: 100px; margin-left: 10px; height:39px;">Accept</button>
      </form>
      <form class="form-group s-horizontal clearfix" action="" method="post">
        <p class="s-title">Delete:</p>
        <input class="simple-input"type="text" name="post_id" placeholder="Post Id" required>
        <button class="dft-btn" type="submit" name="delete_post" style="width: 100px; margin-left: 10px; height:39px;">Delete</button>
      </form>
      <p class="text s-horizontal"><?php echo $answear; ?></p>
    </div>
	</div>
</section>
<footer>
  <p class="footer">© 2017 Adam Mickiewicz University in Poznań</p>
</footer>
<?php }
else {
  header('Location: profile.php');
} ?>
</body>

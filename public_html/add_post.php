<?php include("php/add.php") ?>
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
    <li><a href="profile.php">Profile</a></li>
    <li><a href="index.php?logout='1'">Log out</a></li>
  </ul>
</nav>
<section class="main">
	<div class="container">
		<div class="content clearfix">
      <form class="form-group clearfix" method="post" action="">
        <input type="text" name="title" placeholder="Post title" value="<?php echo $title ?>" required>
        <textarea rows="15" name="content" placeholder="Please insert your article here..."  required><?php echo $content ?></textarea>
        <button class="dft-btn" style="width: 100%;" type="submit" name="submit-post">Submit</button>
      </form>
        <p class="text" style="color: green; padding-top: 10px; font-size: 1rem;"><?php echo $success; ?></p>
			</div>
		</div>
	</div>
</section>
<footer>
  <p class="footer">© 2017 Adam Mickiewicz University in Poznań</p>
</footer>
<?php }else{
  header('Location: index.php');
} ?>
</body>

<?php include './php/add.php'?>
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
		<li><a href="que.php">Waiting</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="index.php?logout='1'">Log out</a></li>
  </ul>
</nav>
<section class="main">
	<div class="container">
		<div class="content clearfix">
      <form
              action="./upload/upload.php"
              class="form-group clearfix"
              method="post"
              enctype="multipart/form-data"
      >
        <input type="text" name="title" placeholder="Post title" value="<?php echo $title ?>">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
      </form>
        <p class="text" style="color: green; padding-top: 10px; font-size: 1rem;"><?php echo $_SESSION['success']; ?></p>
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

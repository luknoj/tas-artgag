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
    <form action="" class="singlepost-form" method="post">
        <input class="singlepost-input" type="text" placeholder="Select post which you want to see" name="post-id">
        <button type="submit" name="check-post">Submit</button>
    </form>
    <?php include('php/single_post_render.php') ?>
    <?php if ($_SESSION['post-id'] != 0) { ?>
    <div class="container" style="width: 700px;">
        <div class="content post clearfix">
            <div class="post-head clearfix">
                <h1 class="title"><?php echo $_SESSION['title']  ?></h1>
                <h1 class="date"><?php echo $_SESSION['date'] ?></h1>
            </div>
            <div class="post-content">
                <img src="<?php echo $_SESSION['URL'] ?>" alt="">
            </div>
        </div>
    </div>
        <form
            action=""
            class="singlepost-form"
            method="post"
        >
            <input class="singlepost-input"
                   type="text"
                   placeholder="Add comment"
                   name="comment"
            >
            <button type="submit" name="submit-comment">Submit</button>
        </form>
    <?php } else {?>
    <p>Nie ma postu</p>
    <?php }
        include ('php/render_comments.php');
    ?>
</section>
<footer>
    <p class="footer">© 2017 Adam Mickiewicz University in Poznań</p>
</footer>
</body>

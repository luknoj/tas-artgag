<?php
  require('config.php');
  session_start();
  $title = "";
  $content = "";
  $success = "";
  if (isset($_POST['submit-post'])) {
    $user_id = $_SESSION['user_id'];
    $title = stripcslashes($_POST['title']);
		$title = mysqli_real_escape_string($con,$title);
    $content = stripcslashes($_POST['content']);
  	$content = mysqli_real_escape_string($con,$content);
    $query = "INSERT INTO articles (user_id, title, content, post_date) VALUES ('$user_id', '$title', '$content', CURDATE())";
    $result = mysqli_query($con, $query);
    if ($result) {
      $success="Your post has been added";
      header('Location: ./add_post.php');
    }else {
      die('no nie smiga ' . mysqli_error());
    }
  }else{}
?>

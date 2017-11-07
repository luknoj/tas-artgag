<?php
	require('config.php');
	session_start();
  if (isset($_POST['accept_post'])) {
    $post_id = mysqli_real_escape_string($con,$_POST['post_id']);

		$query = "UPDATE articles SET accepted=1 WHERE post_id='$post_id'";
		$result = mysqli_query($con,$query);
		if ($result) {
			$answear = "Post #'$post_id' has been accepted";
		} else {
			$answear = "Something went wrong, try again!";
		}
  }
	if (isset($_POST['delete_post'])) {
    $post_id = mysqli_real_escape_string($con,$_POST['post_id']);
		$query = "DELETE FROM articles WHERE post_id='$post_id'";
		$result = mysqli_query($con,$query);
		if ($result) {
			$answear = "Post #$post_id has been deleted";
		} else {
			$answear = "Something went wrong, try again!";
		}
	}
?>

<?php
require ('config.php');

if (isset($_POST['check-post'])) {
   $postId = mysqli_real_escape_string($con,$_POST['post-id']);
   $_SESSION['post-id'] = $postId;
   $query = "SELECT * FROM articles WHERE post_id = '$postId' ORDER BY post_date DESC";

   $result = mysqli_query($con,$query);
   $row = mysqli_fetch_row($result);
   $_SESSION['post-id'] = $row[0];
   $_SESSION['title'] = $row[2];
   $_SESSION['URL'] = $row[3];
   $_SESSION['date'] = $row[4];
   $post_id = $_SESSION['post-id'];

   }


$post_id = $_SESSION['post-id'];
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];


if(isset($_POST['submit-comment'])) {
   $comment = mysqli_real_escape_string($con,$_POST['comment']);
   $query = "INSERT into `comments` (post_id, user_id, user_name, date, content) VALUES ('$post_id', '$user_id', '$username', CURRENT_DATE(), '$comment' )";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<p class="text" style="color: green;"><strong>You are registered successfully.</strong></p>';
        header('Location: single_post.php');
    } else {
    }


}
?>

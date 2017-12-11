<?php

$post_id = $_SESSION['post-id'];
$select = "SELECT * from `comments` WHERE post_id='$post_id'";

// QUERY FOR SELECTING USERNAMES FOR POSTS
/*$query2 = "SELECT a.post_id, a.post_date, a.user_id, a.comment FROM comments AS a INNER JOIN 'users' AS b ON a.user_id = b=userId WHERE a.post_id = '$postId' ORDER BY a.post_date DESC";*/

$selectResult = mysqli_query($con, $select);
while ($row = mysqli_fetch_array($selectResult, MYSQLI_ASSOC)) {
printf('
<div class="container" style="width: 700px;">
    <div class="content comment clearfix">
        <div class="post-head clearfix">
            <h1 class="title">%s</h1>
            <h1 class="date">%s</h1>
        </div>
        <div class="post-content">
            <p>%s</p>
        </div>
    </div>
</div>
'
,$row['user_name'], $row['date'], $row['content']);
}

?>
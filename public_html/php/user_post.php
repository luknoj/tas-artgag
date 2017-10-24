<?php
require ('config.php');
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM articles WHERE user_id='$user_id'";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	printf('
		<div class="user-post clearfix">
      		<div class="post-head clearfix">
		        <h1 class="title">%s</h1>
		        <h1 class="date">%s</h1>
		    </div>
      		<div class="post-content">
        		<p>%s</p>
      		</div>
    	</div>
	'
	,$row['title'], $row['post_date'], $row['content']);
}
 ?>

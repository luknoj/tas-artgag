<?php 
require ('config.php');

$query = "SELECT * FROM articles";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	printf('
	<div class="container" style="width: 700px;">
		<div class="content post clearfix">
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
	,$row['title'], $row['post_date'], $row['content']);
}
 ?>
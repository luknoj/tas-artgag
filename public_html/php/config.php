<?php
  define('DBHOST', '127.0.0.1'); //mysql.wmi.amu.edu.pl
  define('DBUSER', 'root'); // s407274
  define('DBPASS', ''); // kukis4563
  define('DBNAME', 'test2'); // s407274_artgag
  $errors = array();
  $con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

  if (mysqli_connect_errno()) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_errno();
  } else {}
?>

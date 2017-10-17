<?php
  session_start();
  define('DBHOST', 'mysql.wmi.amu.edu.pl');
  define('DBUSER', 's407274');
  define('DBPASS', 'kukis4563');
  define('DBNAME', 's407274_artgag');
  $username = "";
  $email = "";
  $errors = array();
  $con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

  if (mysqli_connect_errno()) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_errno();
  } else { echo "GIT";}
?>

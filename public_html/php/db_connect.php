<?php

error_reporting( ~E_DEPRECATED & ~E_NOTICE);

define('DBHOST', 'localhost');
define('DBUSER', 's407274');
define('DBPASS', 'kukis4563');
define('DBNAME', 's407274_artgag');

$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysql_select_db(DBNAME);

if (!$conn) {
	die("Connection failed: " . mysql_error());
}

if (!$dbcon) {
	die("Database Connection failed: " . mysql_error());
}
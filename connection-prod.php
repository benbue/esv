<?php
$hostname_connection = "localhost";
$database_connection = "usr_web197_4";
$username_connection = "web197";
$password_connection = "Q5knupPr";
$connection = mysql_connect($hostname_connection, $username_connection, $password_connection, $database_connection) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
$debug = 0;
?>

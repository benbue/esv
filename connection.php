<?php
$hostname_connection = "localhost";
$database_connection = "####";
$username_connection = "esv";
$password_connection = "#####";
//$password_connection = "Q5knupPr";
$connection = mysql_connect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR); 
// echo ($database_connection);
// echo ($connection);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
$debug = 1;
?>

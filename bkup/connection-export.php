<?php
$hostname_connection = "localhost";
$database_connection = "usr_web197_4";
$username_connection = "web197";
//$password_connection = "2rKAAPsMG9dMG36u";
$password_connection = "Q5knupPr";
$connection = mysql_connect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR); 
// echo ($database_connection);
// echo ($connection);
mysql_query("SET NAMES 'utf16le'");
mysql_query("SET CHARACTER SET 'utf16le'");
$debug = 0;
?>


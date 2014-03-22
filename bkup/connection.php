<?php
$hostname_connection = "localhost";
$database_connection = "usr_web197_4";
$username_connection = "esv";
$password_connection = "2rKAAPsMG9dMG36u";
//$password_connection = "Q5knupPr";
$connection = mysql_connect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR); 
// echo ($database_connection);
// echo ($connection);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
$debug = 1;
?>

<!--- Position TW vs. Feldspieler noch in DB aufnehmen und wegspeichern -->
<!--- Captcha einbauen -->
<!--- Datenschutzbestimmungen ergänzen und verlinken -->

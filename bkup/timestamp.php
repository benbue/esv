<?php
	$date = date_create();
echo "Timestamp: ";
echo date_timestamp_get($date);
echo date_format($date, 'Y-m-d H:i:s');
 ?>
 
<?php
//require_once('../connection-prod.php');
require_once('../connection.php');
$DB_TBLName = "usr_web197_4.teilnehmer"; //MySQL Table Name
$timestamp = date('d-m-Y'); //$timestamp takes the current time
$filename = "Teilnehmer-".$timestamp;         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/
//create MySQL connection
$sql = "Select * from $DB_TBLName";
//execute query
$result = @mysql_query($sql,$connection)
    or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());
$file_ending = "xls";
/**
* Checks to see of a string contains a particular substring
* @param $substring the substring to match
* @param $string the string to search 
* @return true if $substring is found in $string, false otherwise
*/
function contains($substring, $string) {
        $pos = strpos($string, $substring);
 
        if($pos === false) {
                // string needle NOT found in haystack
                return false;
        }
        else {
                // string needle found in haystack
                return true;
        }
 
}

/*******Start of Formatting for Excel*******/
//define separator (defines columns in excel & tabs in word)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anmeldung Ferien-Camp</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/modernizr.js"></script>
  </head>
  <body>
<?php  
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysql_num_fields($result); $i++) {
echo mysql_field_name($result,$i) . "\t";
}
print("\n");
//end of printing column names
//start while loop to get data
    while($row = mysql_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
				{
				if (contains($row[$j], "ü"))
					{
					echo "String vor Umwandlung: $row[$j] /n";
					$row[$j] = iconv("UTF-8", "ISO-8859-1", $row[$j]);
					echo "String nach Umwandlung: $row[$j] /n";
					}
				$schema_insert .= "$row[$j]".$sep;
				}
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
 $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }
?>
</body>
</html>

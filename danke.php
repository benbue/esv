<?php
header('Content-Type: text/html; charset=utf-8');
echo $_SERVER['SERVER_NAME'];

//Umgebungs-Weiche für DB-Verbindung und Mailempfänger

switch($_SERVER['SERVER_NAME'])
{
case 'localhost':
	require_once('connection.php');
	$to = "benjamin@buettrich.de";
	break;
case 'www.buettrich.de':
	require_once('connection-prod.php');
	$to = "e.langenfeld@t-online.de";
	break;
}

//save the data on the DB and send the email

print_r ($_POST);

if(isset($_POST['action']) && $_POST['action'] == 'submitform')
{
	//receive the variables
	
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$gebdatum = $_POST['gebdatum'];
	$datum = explode(".",$gebdatum);
	print_r ($datum);
	$gebdatum = $datum[2]."-".$datum[1]."-".$datum[0];
	echo $gebdatum;
	$nameVerein = "ESV Olympia Köln";
	//	$nameVerein = $_POST['nameVerein'];   noch deaktiviert
	if ($_POST['zeitraum1'] == true) {$zeitraum1 = 1;} else {$zeitraum1 = 0;}
	if ($_POST['zeitraum2'] == true) {$zeitraum2 = 1;} else {$zeitraum2 = 0;}
	$position = $_POST['rad_Position'];
	if ($_POST['zeitraum1'] == true) {$zeitraum1 = 1;} else {$zeitraum1 = 0;}
	if ($_POST['zeitraum2'] == true) {$zeitraum2 = 1;} else {$zeitraum2 = 0;}
	$vornameEltern = $_POST['vornameEltern'];
	$nachnameEltern = $_POST['nachnameEltern'];
	$strasse = $_POST['strasse'];
	$hausnummer = $_POST['hausnummer'];
	$plz = $_POST['postleitzahl'];
	$ort = $_POST['ort'];
	$mobiltelefon = $_POST['mobiltelefon'];
	$festnetz = $_POST['festnetz'];
	$email = $_POST['email'];
	if ($_POST['bestaetigung'] = true) $bestaetigung = 1;
	$hinweise = $_POST['hinweise'];
	if (empty($hinweise)) {$hinweise = "Keine Hinweise";}
	$date = date_create();
	$timestamp = date_format($date, 'Y-m-d H:i:s');	

	// $url = $_POST['url'];
	// $comment = $_POST['comment'];
	// $ip = gethostbyname($_SERVER['REMOTE_ADDR']);
	
	//save the data on the DB
	
	$insert_query = sprintf("INSERT INTO usr_web197_4.teilnehmer (`timestamp`, `vorname`, `nachname`, `gebdatum`, `position`, `nameVerein`, `zeitraum1`, `zeitraum2`, `vornameEltern`, `nachnameEltern`, `strasse`, `hausnummer`, `plz`, `ort`, `mobiltelefon`, `festnetz`, `email`, `bestaetigung`, `hinweise`) VALUES (NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
							sanitize($vorname, "text"),
							sanitize($nachname, "text"),
							sanitize($gebdatum, "date"),
							sanitize($position, "text"),
							sanitize($nameVerein, "text"),
							sanitize($zeitraum1, "int"),
							sanitize($zeitraum2, "int"),
							sanitize($vornameEltern, "text"),
							sanitize($nachnameEltern, "text"),
							sanitize($strasse, "text"),
							sanitize($hausnummer, "text"),
							sanitize($plz, "int"),
							sanitize($ort, "text"),
							sanitize($mobiltelefon, "text"),
							sanitize($festnetz, "text"),
							sanitize($email, "text"),
							sanitize($bestaetigung, "text"),
							sanitize($hinweise, "text"));

	$result = mysql_query($insert_query, $connection) or die(mysql_error());
	
	if($result)
	{
		//send the email
		
		$subject = "Feriencamp Ostern 2014: Anmeldung $vorname $nachname";
		
		//headers and subject
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: ".$vorname." <".$email.">\r\n";
//		$headers .= "From: esv@buettrich.de \r\n";
		
		$body = "Teilnehmer:<br />";
		$body .= "Vorname: \t".$vorname."<br />";
		$body .= "Nachname: \t".$nachname."<br />";
		$body .= "Email: \t".$email."<br />";
		$body .= "Woche: \t";
		if ($zeitraum1 AND $zeitraum2) {$body .= "1 und 2<br />";}
		elseif ($zeitraum1) {$body .= "1<br />";}
		elseif ($zeitraum2) {$body .= "2<br />";}
		$body .= "Timestamp:  \t".$timestamp."<br />";
		
		mail($to, $subject, $body, $headers);
	}
}

function sanitize($value, $type) 
{
  $value = (!get_magic_quotes_gpc()) ? addslashes($value) : $value;

  switch ($type) {
    case "text":
      $value = ($value != "") ? "'" . $value . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $value = ($value != "") ? intval($value) : "NULL";
      break;
    case "double":
      $value = ($value != "") ? "'" . doubleval($value) . "'" : "NULL";
      break;
    case "date":
      $value = ($value != "") ? "'" . $value . "'" : "NULL";
      break;
  }
  
  return $value;
}
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
    
    <div class="row">
      <div class="large-12 columns">
        <h3>Danke... </h3>
		<h3>und schön, dass Ihr dabei seid!</h3>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <p>Bitte beachtet, dass die Anmeldung erst gültig ist, wenn Ihr <strong>das Geld überwiesen</strong> habt.</p>
			<p>Alle Angaben zur Überweisung, die Regeln und Informationen zum Feriencamp findet Ihr in den <a href="http://www.esv-olympia.de/content/images/jugendfussball/esv-feriencamp-teilnahmebedingungen.pdf" target="_blank">Teilnahmebedingungen</a> (PDF).  </p>
      	</div>
    </div>

	<div class="row">
		<div class="large-12 columns">
			<div class="small">
			<p>&nbsp;</p>
			<hr>
			<?php
				if ($debug) {
				echo "<span class='success alert secondary label'>Debugging Informationen:</span><br />";
				if (isset($_POST['zeitraum1'])) {	
				echo "zeitraum1 is set so I will print. <br />";
				}
				echo "<hr>";
				echo "Zeitraum 1 is $zeitraum1 <br /> ";
				echo "Zeitraum 2 is $zeitraum2 <br /> ";
				echo "<hr>";
				echo "Connection is $connection <br /> ";
				echo "db_connection is $database_connection <br />  ";
				echo "Insert Query: $insert_query <br />  ";
				echo "<hr>";
				echo "E-Mail wurde versandt an $to <br />";
				echo "<hr>";
				}
			?>
			</div>
			</div>
		</div>
    </div>

   
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

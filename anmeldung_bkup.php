<?php
require_once('connection.php');
echo "Connection is $connection  ";
echo "db_connection is $database_connection   ";

//save the data on the DB and send the email

if(isset($_POST['action']) && $_POST['action'] == 'submitform')
{
	//recieve the variables
	
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$email = $_POST['email'];
	
	$date = date_create();
	$timestamp = date_format($date, 'Y-m-d H:i:s');	

	// $url = $_POST['url'];
	// $comment = $_POST['comment'];
	// $ip = gethostbyname($_SERVER['REMOTE_ADDR']);
	
	//save the data on the DB

	
	$insert_query = sprintf("INSERT INTO esv_camps.teilnehmer (vorname, nachname, email, timestamp) VALUES (%s, %s, %s, NOW())",
							sanitize($vorname, "text"),
							sanitize($nachname, "text"),
							sanitize($email, "text"));
	echo "SQL: $insert_query";
	$result = mysql_query($insert_query, $connection) or die(mysql_error());
	
	if($result)
	{
		//send the email
		
		$to = "benjamin@buettrich.de";
		$subject = "New contact from the website";
		
		//headers and subject
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$vorname." <".$email.">\r\n";
		
		$body = "New contact<br />";
		$body .= "Name: ".$vorname."<br />";
		$body .= "Email: ".$email."<br />";
		$body .= "Timestamp: ".$timestamp."<br />";
		
		mail($to, $subject, $body, $headers);
		
		//ok message
		
		echo "Your message has been sent";
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
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 columns">
        <h1>Anmeldung zum ESV Feriencamp</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>Schön, dass Ihr dabei sein wollt... </h3>
	        <p>Um Euch anzumelden, füllt bitte das untenstehende Formular aus und ....</p>
	        <p>Zweiter Absatz:  	
			<?php // echo($database_connection,$connection);  ?>
			</p>
	        <div class="row">
	        	<div class="large-4 medium-4 columns">
	    		<p><a href="http://foundation.zurb.com/docs">Schritt 1</a><br />Alle Details über die Feriencamps (Osterferien 2014, 1. und 2. Woche) findet Ihr hier im PDF. Bitte lest Euch die Teilnahmebedingungen gut durch.</p>
	    	</div>
	        	<div class="large-4 medium-4 columns">
	        		<p><a href="http://github.com/zurb/foundation">Schritt 2</a><br />Wenn Ihr Euren Sohn oder Eure Tochter anmelden wollt, füllt das Formular aus und stimmt den Bedingungen im PDF zu.</p>
	        	</div>
	        	<div class="large-4 medium-4 columns">
	        		<p><a href="http://twitter.com/foundationzurb">Schritt 3</a><br />Schickt das Online-Formular ab und überweist das Geld an die Bankverbindung, die im PDF genannt ist. Mit Zahlungseingang wird Eure Anmeldung verbindlich.</p>
	        	</div>        
					</div>
      	</div>
      </div>
    </div>

    <div class="row">
      <div class="large-8 medium-8 columns">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class="row">
          <div class="large-12 columns">
            <div class="callout panel">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
          <div class="large-6 medium-6 columns">
            <div class="callout panel">
              <p>Six columns</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <p>Four columns</p>
            </div>
          </div>
        </div>
        
        <hr />
                
        <h5>Anmelde-Formular</h5>
        <form id="anmeldung" name="anmeldung" action="timestamp.php" method="post">
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Input Label</label>
				      <input type="text" placeholder="large-12.columns" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 medium-6 columns">
						<label for="txt_VornameTeilnehmer" id="VornameTeilnehmer-ariaLabel">Vorname Teilnehmer</label>
						<input id="vorname" name="vorname" type="text" aria-labelledby="VornameTeilnehmer-ariaLabel" class="required" title="Vorname Teilnehmer. Pflichtfeld" />
				    </div>
				    <div class="large-6 medium-6 columns">
				    	<label for="txt_NachnameTeilnehmer" id="NachnameTeilnehmer-ariaLabel">Nachname Teilnehmer</label>
						<input id="nachname" name="nachname" type="text" aria-labelledby="NachnameTeilnehmer-ariaLabel" class="required" title="Nachname Teilnehmer. Pflichtfeld" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-12 medium-12 columns">
				    	<label for="txt_EMail" id="EMail-ariaLabel">E-Mail</label>
						<input id="email" name="email" type="text" aria-labelledby="EMail-ariaLabel" class="required" title="E-Mail. Pflichtfeld" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Select Box</label>
				      <select>
				        <option value="husker">Husker</option>
				        <option value="starbuck">Starbuck</option>
				        <option value="hotdog">Hot Dog</option>
				        <option value="apollo">Apollo</option>
				      </select>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-6 medium-6 columns">
				      <label>Choose Your Favorite</label>
				      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
				      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
				    </div>
				    <div class="large-6 medium-6 columns">
				      <label>Check these out</label>
				      <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
				      <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Textarea Label</label>
				      <textarea placeholder="small-12.columns"></textarea>
				    </div>
				  </div>
				  <div class="row" style="float:right";>
				    <div class="large-12 columns">
						<input type="hidden" id="action" name="action" value="submitform" />
						<input class="small radius button" type="submit" id="submit" name="submit" value="submit" />
					</div>
					</div>
				</form>
      </div>     

      <div class="large-4 medium-4 columns">
			  <h5>Try one of these buttons:</h5>
			  <p><a href="#" class="small button">Simple Button</a><br/>
        <a href="#" class="small radius button">Radius Button</a><br/>
        <a href="#" class="small round button">Round Button</a><br/>            
        <a href="#" class="medium success button">Success Btn</a><br/>
        <a href="#" class="medium alert button">Alert Btn</a><br/>
        <a href="#" class="medium secondary button">Secondary Btn</a></p>           
				<div class="panel">
        	<h5>So many components, girl!</h5>
        	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>          
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

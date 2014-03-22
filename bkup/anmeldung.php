<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anmeldung Feriencamp</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <!-- link rel="stylesheet" href="css/bootstrap.css" /-->
    <!-- link rel="stylesheet" href="css/bootstrap-responsive.css" -->
	<!-- script type="text/javascript" src="js/jquery.js"></script -->
	<!-- script type="text/javascript" src="js/parsley.js"></script --> 
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 columns">
        <h3>Anmeldung zum Fußball-Camp / Osterferien 2014</h3>
		<p> Angebot für die Jahrgänge 2002 - 2006 (1. und 2. Ferienwoche)</p>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h5>Schön, dass Ihr dabei sein wollt... </h5>
	        <p>Um Deinen Sohn oder Deine Tochter anzumelden, fülle bitte das untenstehende Formular aus und überweise den passenden Betrag innerhalb der nächsten 14 Tage. Alle <a href="http://www.esv-olympia.de/content/images/jugendfussball/esv-feriencamp-teilnahmebedingungen.pdf" target="_blank">Teilnahmebedingungen und Details</a> findest Du in <a href="http://www.esv-olympia.de/content/images/jugendfussball/esv-feriencamp-teilnahmebedingungen.pdf" target="_blank">diesem PDF</a>. Die Teilnehmerzahl ist begrenzt, die Anmeldungen werden in der Reihenfolge des Zahlungseingangs berücksichtigt.  	
			</p>
      	</div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 medium-12 columns">
                
		<h5 class="balken">Teilnehmer / Teilnehmerin</h5>
        <form data-abide id="anmeldung" name="anmeldung" action="danke.php" method="post">
				<div class="row">
				    <div class="large-6 medium-6 columns">
						<label for="txt_VornameTeilnehmer" id="VornameTeilnehmer-ariaLabel">Vorname Teilnehmer</label>
						<input id="vorname" name="vorname" type="text" aria-labelledby="VornameTeilnehmer-ariaLabel" required title="Vorname Teilnehmer. Pflichtfeld" />
				    </div>
				    <div class="large-6 medium-6 columns">
				    	<label for="txt_NachnameTeilnehmer" id="NachnameTeilnehmer-ariaLabel">Nachname Teilnehmer</label>
						<input id="nachname" name="nachname" type="text" aria-labelledby="NachnameTeilnehmer-ariaLabel" required title="Nachname Teilnehmer. Pflichtfeld" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-6 medium-6 columns">
						<label for="gebdatum" id="Gebdatum-ariaLabel">Geb.datum</label>
						<input id="gebdatum" name="gebdatum" placeholder="z.B. 31.01.2004" type="text" pattern="german_date" aria-labelledby="Gebdatum-ariaLabel" required title="Geb.datum. Pflichtfeld" />
						<small class="error">Bitte gib das Geburtsdatum im Format "15.03.2002" ein.</small>
					</div>
				    <div class="large-6 medium-6 columns">
						<label>Übliche Position</label>
						<div class="zentriert">
							<span><input value="Feldspieler" id="rad_Position_1" name="rad_Position" type="radio" aria-labelledby="Position-ariaLabel" required title="Feldspieler. Pflichtfeld" checked/> <label for="rad_Position_1" id="Position-ariaLabel">Feldspieler/in</label></span>
							<span><input value="Torwart" id="rad_Position_2" name="rad_Position" type="radio" aria-labelledby="Position-ariaLabel" required title="Torwart. Pflichtfeld" /> <label for="rad_Position_2" id="Position-ariaLabel">Torhüter/in</label></span>
						</div>
					</div>
				</div>
				
				<!--/-- div class="row">
					<div class="large-6 medium-6 columns">
				      <label>Vereinszugehörigkeit</label>
				      <input type="radio" name="verein" value="ESV" id="esv" checked><label for="vereinESV">ESV Olympia</label>
				      <input type="radio" name="verein" value="Andere" id="andererVerein" disabled><label for="vereinAnderer">Anderer Verein:</label>
				    </div>
					<div class="large-6 medium-6 columns">
				    	<input id="nameVerein" name="nameVerein" type="text" aria-labelledby="NameVerein-ariaLabel" title="NameVerein" disabled />
					</div>
				</div--/-->
				<div class="row">
				    <div class="large-6 medium-6 columns">
						<fieldset>
						<legend>Gewünschter Zeitraum</legend>
								<input type="hidden" name="zeitraum1" value=0>
								<input type="hidden" name="zeitraum2" value=0>
								<input id="zeitraum1" name="zeitraum1" type="checkbox"><label for="zeitraum1">1. Ferienwoche (14.-17.04.2014)</label><br />
								<input id="zeitraum2" name="zeitraum2" type="checkbox"><label for="zeitraum2">2. Ferienwoche (22.-25.04.2014)</label>
				    </div>
					<div class="large-6 medium-6 columns">
						&nbsp;<br />
						<div class="panel callout radius">
						Beitrag für 1 Woche (4 Camp-Tage):<br /><strong>65,00 EUR</strong> <br />&nbsp;<br />
						Beitrag für 2 Wochen (8 Camp-Tage):<br /><strong>130,00 EUR</strong><br />
						</div>
					</div>
				</div>
		<h5 class="balken">Kontakt / Erziehungsberechtigte</h5>
				<div class="row">
				    <div class="large-6 medium-6 columns">
						<label for="txt_VornameEltern" id="VornameEltern-ariaLabel">Vorname</label>
						<input id="vornameEltern" name="vornameEltern" type="text" aria-labelledby="VornameEltern-ariaLabel" required title="Vorname Erziehungsberechtigte. Pflichtfeld" />
				    </div>
				    <div class="large-6 medium-6 columns">
						<label for="txt_NachnameEltern" id="NachnameEltern-ariaLabel">Nachname</label>
						<input id="nachnameEltern" name="nachnameEltern" type="text" aria-labelledby="NachnameEltern-ariaLabel" required title="Nachname Erziehungsberechtigte. Pflichtfeld" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-10 medium-10 columns">
						<label for="txt_Strasse" id="Strasse-ariaLabel">Straße</label>
						<input id="strasse" name="strasse" type="text" aria-labelledby="Strasse-ariaLabel" required title="Strasse. Pflichtfeld" />
				    </div>
				    <div class="large-2 medium-2 columns">
						<label for="txt_Hausnummer" id="Hausnummer-ariaLabel">Hausnr.</label>
						<input id="hausnummer" name="hausnummer" type="text" aria-labelledby="Hausnummer-ariaLabel" required title="Hausnummer. Pflichtfeld" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-3 medium-3 columns">
						<label for="txt_PLZ" id="Postleitzahl-ariaLabel">Postleitzahl</label>
						<input id="plz" name="postleitzahl" type="text" aria-labelledby="Postleitzahl-ariaLabel" required title="Postleitzahl. Pflichtfeld" />
				    </div>
				    <div class="large-9 medium-9 columns">
						<label for="txt_Ort" id="Ort-ariaLabel">Ort</label>
						<input id="ort" name="ort" type="text" aria-labelledby="Ort-ariaLabel" required title="Ort. Pflichtfeld" value="K&ouml;ln" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-6 medium-6 columns">
						<label for="txt_Mobiltelefon" id="Mobiltelefon-ariaLabel">Mobiltelefon</label>
						<input id="mobiltelefon" name="mobiltelefon" type="text" aria-labelledby="Mobiltelefon-ariaLabel" required title="Mobiltelefon. Pflichtfeld" />
				    </div>
				    <div class="large-6 medium-6 columns">
						<label for="txt_Festnetz" id="Festnetz-ariaLabel">Festnetz</label>
						<input id="festnetz" name="festnetz" type="text" aria-labelledby="Festnetz-ariaLabel" required title="Festnetz. Pflichtfeld" value="0221 "/>
				    </div>
				</div>

				<div class="row">
				    <div class="large-12 medium-12 columns">
						<label for="email">Email * :</label>
						<input type="email" name="email" required />

<!--- 				    	<label for="email" id="EMail-ariaLabel">E-Mail</label>
						<input id="email" name="email" type="text" aria-labelledby="EMail-ariaLabel" parsley-trigger="change" parsley-type="email" required="required" title="E-Mail. Pflichtfeld" placeholder="Details zum Camp senden wir an diese Adresse" />  --/-->
				    </div>
				</div>
				<div class="row">
					<div class="large-12 medium-12 columns">
					<fieldset>
						<legend>Bestätigung</legend>
						<label for="bestaetigung" class>
								<input id="bestaetigung" type="checkbox" required>
Hiermit bestätige ich, dass ich die <a href="ESV-Feriencamp-Teilnahmebedingungen.pdf" target="_blank">Teilnahmebedingungen (PDF)</a> gelesen habe und sie akzeptiere. Die Teilnahmegebühr von 65,00 EUR für 4 Tage bzw. 130,00 EUR für 8 Tage überweise ich in den nächsten 14 Tagen.</label>

					</fieldset>
					</div>
				</div>
				<div class="row">
				    <div class="large-12 columns">
				      <label>Besondere Hinweise</label>
				      <textarea id="hinweise" name="hinweise" placeholder="Bitte auch Allergien, Medikamente oder gesundheitliche Hinweise hier eintragen, wenn wir sie beim Camp berücksichtigen sollen."></textarea>
				    </div>
				  </div>
				  <div class="row" style="float:right";>
				    <div class="large-12 columns">
						<input type="hidden" id="action" name="action" value="submitform" />
						<input class="small radius button" type="submit" id="submit" name="submit" value="Kostenpflichtig anmelden" />
					</div>
					</div>
				</form>
      </div>     


    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/foundation.abide.js"></script>	
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

<?php
session_start();
require_once "password.php";
require_once "functions.php";

//this 'if' was the first 'if' from above
if (isset($_POST)) {
	$benutzer = checkFormFields($_POST);
}

// Wenn nicht eingeloggt dann umleiten
if (!$_SESSION['eingeloggt']) {
	// weiterleiten("../seite2.php");
	weiterleiten("reisen.php");
	// was: weiterleiten("login.php");
}

if (isset($_POST['speichern'])) {
	saveBenutzer($_POST);
}
if (isset($_POST['logout'])) {
	destroy();
}
$benutzerDaten = gibEinzelbenutzer($_SESSION['userid']);

?>

  <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Benutzer bearbeiten</title>
 </head>
 <body>
 	<form action="eingeloggt.php" method="POST">
		<!-- POST -->
 		<div>
 			<input type="hidden" name="userid" value="<?php echo $benutzerDaten['userid']; ?>">
 		</div>
 		<div>
 			<input type="text" name="benutzername" placeholder="Benutzername" value="<?php echo $benutzerDaten['benutzername']; ?>">
 		</div>
		<div>
			<input type="password" name="passwort" placeholder="Neues Passwort">
		</div>
		<div>
			<input type="password" name="passwortwdh" placeholder="Neues Passwort erneut eingeben">
		</div>


		<div>
			<input type="text" name="kundenName"  placeholder="Kunden Name">
		</div>
		<div>
			<input type="text" name="kundenVorname"  placeholder="Kunden Vorname">
		</div>
		<div>
			<input type="text" name="ZielOrt" placeholder="Ziel Ort">
		</div>
		<div>
			<input type="text" name="pries" placeholder="Pries">
		</div>
		<div>
			<input type="submit" value="Save" name="saved">
			<!-- was > name="gesendet" -->
		</div>


		<div>
			<input type="text" name="email" value="<?php echo $benutzerDaten['email']; ?>" placeholder="E-mail">
		</div>
		<div>
			<input type="submit" name="speichern" value="Speichern">
		</div>
			<div>
			<!-- in class the made a link that goes to another page (logout.php) and there it starts the session + destroys it and then weiterleiten/transfers to login.php-->
				<input type="submit" name="logout" value="Ausloggen">
			</div>
 	</form>
 </body>
 </html>

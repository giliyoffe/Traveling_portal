<?php
require_once "benutzer.php";
require_once "password.php";

function weiterleiten($url){
	header("Location: $url");
}

function gibBenutzer(){
	return unserialize(file_get_contents('benutzer.txt'));
};

// Funktion zum überprüfen der Eingabefelder aus Formular - Wenn User gefunden dann Passwort Prüfen
function checkFormFields($eingabe){
	$benutzer = gibBenutzer();
	// Falls Passwort und User identisch dann $_SESSION['eingeloggt'] auf true setzen und Seiteninhalt von eingeloggt.php anzeigen
	foreach ($benutzer as $key => $einzelbenutzer) {
		if ($einzelbenutzer['benutzername'] === $eingabe['benutzername'] && password_verify($eingabe['passwort'], $einzelbenutzer['passwort'])) {
			$loginBenutzer = array('userid' => $key, 'login' => true);
			$_SESSION['eingeloggt'] = true;
			return $loginBenutzer;
		}
	}
}

// Funktion zum Auslesen eines einzelnen Benutzer.
function gibEinzelbenutzer($einzelbenutzerID){
	// give ID of user in array and then search to grasp it
	$benutzer = gibBenutzer();
	// Felder des Benutzers in neuem Array zurückgeben (nicht alle Felder)
	foreach ($benutzer as $key => $einzelbenutzer) {
		if ($key === $einzelbenutzerID) {
			$benutzerDaten['benutzername'] = $einzelbenutzer['benutzername'];
			$benutzerDaten['email'] = $einzelbenutzer['email'];
			$benutzerDaten['id'] = $key;
			return $benutzerDaten;
		}
	}
}

function gibEinyelbenutyerUeberID($id){
	$benutzer = gibBenutzer();
	foreach ($benutzer as $key => $einzelbenutzer) {
		if ($key === $id) {
			return $einzelbenutzer;
		}
	}
}

function saveBenutzer($eingabe){
	$userid = intval($eingabe['userid']);
	$benutzerNeu = gibBenutzer();
	// Wenn keine Änderungen vorgenommen, dann brauch auch nicht in das Array geschrieben zu werden
	// Geändert werden kann nur E-Mail und Benutzername im Array (Struktur der Arrays bleibt erhalten)
	if ($benutzerNeu[$userid]['benutzername'] != $eingabe['benutzername']) {
		$benutzerNeu[$userid]['benutzername'] = $eingabe['benutzername'];
	}
	if ($benutzerNeu[$userid]['email'] != $eingabe['email']) {
		$benutzerNeu[$userid]['email'] = $eingabe['email'];
	}
	if (
		!empty($eingabe['passwort']) &&
		!empty($eingabe['passwortwdh']) &&
		$eingabe['passwort'] === $eingabe['passwortwdh'])
	{
		$benutzerNeu[$userid]['passwort'] = password_hash($eingabe['passwort'], PASSWORD_DEFAULT);
	}
	file_put_contents("benutzer.txt", serialize($benutzerNeu));
}

// 3. Aufgabe
// 	Logout button anlegen und Session löschen (session_destroy)

// destroy the session
function destroy(){
	session_destroy();
	weiterleiten("login.php");
}


// 2.Aufgabe
// Umschreiben der Funktion(en) damit UserId in Session gespeichert wird und somit jederzeit verfügbar ist und abgefragt werden kann
//mine ~
//
// function assignIndexAsUserId($eingabe){
// 	foreach ($benutzer as $key => $einzelbenutzer) {
// 		if ($einzelbenutzer['benutzername'] === $eingabe['benutzername']) {
// 			$_SESSION['userid'] = $key;
// 		}
// }

// // mine:
// //
// //  1.Aufgabe
// // Funktion zum Schreiben in vorhandene Datensätze (benutzer.txt)
// function datenSpeichern($daten){ //$einzelbenutzerID
// 	$benutzername = $daten['benutzername'];
// 	// $passwort = $daten['passwort'];
// 	// $vorname = $daten['vorname'];
// 	// $nachname = $daten['nachname'];
// 	$email = $daten['email'];
// 	$datensArray = array(
// 				'benutzername' => $benutzername,
// 				// 'passwort' => $passwort,
// 				// 'vorname' => $vorname,
// 				// 'nachname' => $nachname,
// 				'email' => $email
// 	);
// 	// Daten aus Datei auslesen und neue Daten an vorhandene Daten setzen
// 	$datenAusgelesen = gibBenutzer();

// 	// Wenn keine Änderungen vorgenommen, dann brauch auch nicht in das Array geschrieben zu werden
// 	// Geändert werden kann nur E-Mail und Benutzername im Array (Struktur der Arrays bleibt erhalten)

// 	if ($datenAusgelesen['benutzername'] != $datensArray['benutzername']) {
// 		$datenAusgelesen['benutzername'] = $datensArray['benutzername'];
// 	}
// 	if ($datenAusgelesen['email'] != $datensArray['email']) {
// 		$datenAusgelesen['email'] = $datensArray['email'];
// 	}
// 	// Daten mit neuen Daten in Datei schreiben
// 	file_put_contents("benutzer.txt", serialize($datenAusgelesen));
// };





//mine
// function pruefen($benutzer){
// 	foreach ($benutzer as $key => $einzeln) {
// 		if ($einzeln['benutzername'] == $_SESSION['benutzer']) {
// 			if ($einzeln['passwort'] == $_SESSION['passwort']){
// 				$_SESSION['eingeloggt'] = true;
// 				echo " Sie sind angemeldet ";
// 				return;
// 			}
// 			}else{
// 				$_SESSION['eingeloggt'] = false;
// 				echo " Sie sind NICHT angemeldet ";
// 		}
// 	}
// }
?>

<?php
// Sessions immer zu Beginn des Dokument starten bevor eine Ausgabes erfolgt
session_start();
if (isset($_POST['gesendet'])) {
	$_SESSION['name'] = $_POST['name'];
	if ($_POST['passwort'] == 'geheim') {
		$_SESSION['eingeloggt'] = true;
	}else{
		$_SESSION["eingeloggt"] = false;
}

}

// mine:
//
// $_SESSION["eingeloggt"] = false;
//
// if (isset($_SESSION['passwort']) && $_SESSION['passwort'] == 'geheim') {
// 	$_SESSION['$eingeloggt'] = true;
// 	}else{$_SESSION['$eingeloggt'] = false;}
?>

<!-- // legen sie ein text feld an mit button zum senden und begrüßen sie ihren benutzer namen.Wenn der benutzer auf dem seite2 klickt soll der benutzer auch auf seite2 bergrüßt werden ohne eine weitere Eingabe seines Names. -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<div>
		<input type="text" name="name"  placeholder="Name">
	</div>
	<div>
		<input type="password" name="passwort" placeholder="Passwort">
	</div>
	<div>
		<input type="submit" value="Login" name="gesendet">
	</div>
</form>
<?php
	// if (!empty($_SESSION['name'])){
	// 	if (($_SESSION['eingeloggt']) && isset($_SESSION['name'])) {
	// 			echo "Hallo " . $_SESSION['name'];
	// 		}else{
	// 			$_SESSION['name'] = "Gast";
	// 			echo "Hallo " . $_SESSION['name'];
	// 		}
	// }
 ?>

<a href="http://appm52/US-FI201/GYoffe/_take%202%20_YoffeProjekt_REISEN_PORTAL/">Back</a>

<!-- <pre>

	<?php //var_dump($_SESSION) ?>
</pre> -->
<!--
Fragen sie nach eingabes des names nach einem Passwort Wenn das Passwort "geheim" gesetzt wurde, dann wird auch begrüßt. Ansonsten wird der benutzer nicht begrüßt, sondern als gast begrüst? -->

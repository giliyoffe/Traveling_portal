<!-- // FIXME TODO(emphasise): this page is the EDITING page

// real TODO: build/write the page before with all angebotes and that each has an editing button
-->
<?php

session_start();

// if (isset($_SESSION['eingeloggt'])) {
// 		echo "Hallo " . $_SESSION['name'];
// }

?>

<!-- new -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Reisenangebot</title>
	</head>
	<body>
		<section>
				<br>
				<br>
				<br>
				<h3>Angebot Buchungsinformation</h3>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
			</form>

	</section>

		<br>
		<br>
		<br>

	<a href="http://appm52/US-FI201/GYoffe/_take%202%20_YoffeProjekt_REISEN_PORTAL/admin/sessions/loginsystem/login.php">Back</a>

	</body>
</html>

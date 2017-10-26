<?php
// phpinfo();
require_once "password.php";

$benutzer = array(
	array(
		'benutzername' => 'User1',
		'passwort'=>'$2y$10$7WV5rdoqWRYvuI4Y/6GrBetFxM/g5W3Y8Q.EpcOjllIkH3EKo6Gj6',
		'vorname'=>'Joe',
		'nachname'=>'Holymother',
		'email'=>'joe@Holymother.sj',
	),
	array(
		'benutzername' => 'User2',
		'passwort'=>'$2y$10$XKg78jSLDJhiEQWEEtF9yu0TC3uAFnS0K9UbRBFMZcWNS5ySz3sbG',
		'vorname'=>'Petra',
		'nachname'=>'Kamps',
		'email'=>'petra@kamps.de',
	),
		array(
		'benutzername' => 'User3',
		'passwort'=>'$2y$10$SIBIVsB4Cr.SLanqxUR/Gu32AZnQ1KhIsyP4lSw4mnAig8NssezUi',
		'vorname'=>'Jochen',
		'nachname'=>'Klumps',
		'email'=>'Jochen@Klumps.de',
	)
);

// sun == 22fa6121da96f43a106e413e65d4f9089c53824c

// file_put_contents("benutzer.txt", serialize($benutzer));

// echo md5("geheim");

//echo password_hash("geheim3",PASSWORD_DEFAULT);

// foreach ($benutzer as $key => $einzeln) {
// 	if ($einzeln['benutzername'] == "User1") {
// 	echo $key;
// 	}
// }


//password_hash(FELDinhalt, PASSWORD_DEFAULT);

?>

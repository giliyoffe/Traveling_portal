<?php
			//DSN
			$dsn = "mysql:host=localhost;dbname=gyoffedb";
			$user = "gyoffedb";
			$pass = "comhard";
			$options = array(
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Nur für die Entwicklung verwenden
		);
		try{
			$db = new PDO($dsn, $user, $pass, $options);
		} catch (PDOException $except) {
			echo "Fehler bei der Vebindung: " . $except->getMessage();
		}
?>

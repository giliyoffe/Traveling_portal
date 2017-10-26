<?php

function findAllPosts($conn){
	//Query an Datenbank senden zum auslesen der Blogbeiträge
	$stmt = $conn->query("SELECT reiseinformationsportal.ID,  titel, preis, kurtzbeschreibung, beschreibung, beginn, ende, bild, thumbnail, region_id FROM reiseinformationsportal INNER JOIN regionen ON autorid = autoren.ID");
	$beitraege = $stmt->fetchAll();

	//Autoren und Kategorien müssen mit ausgelsen werden
	$stmt = $conn->query("SELECT beitraege.ID, name FROM beitraege INNER JOIN beitrag_kategorie ON beitragid = beitraege.ID INNER JOIN kategorien ON kategorieid = kategorien.ID");
	$kategorien = $stmt->fetchAll();
	foreach($beitraege as $key => $beitrag){
	$beitraege[$key]['kategorien'] = array();
		foreach($kategorien as $kategorie){
			if($kategorie['ID'] == $beitrag['ID']){
				$beitraege[$key]['kategorien'][] = $kategorie['name'];
			}
		}
	}
	//Autor soll mit Benutzername angezeigt werden
	return $beitraege;
}

//Funtion zum auslesen eines einzelnen Beitrags
function findSinglePost($conn, $pid){
	//Query an Datenbank senden zum auslesen des einzelnen Blogbeitrags
	$stmt = $conn->query("SELECT beitraege.ID,  titel, inhalt, erstellt, beitragsbild, benutzername FROM beitraege INNER JOIN autoren ON autorid = autoren.ID WHERE beitraege.ID =" . $pid);
	$singleBeitrag = $stmt->fetchAll();

	//Autor und Kategorien für den einzelnen Beitrag auslesen
	$stmt = $conn->query("SELECT beitraege.ID, name FROM beitraege INNER JOIN beitrag_kategorie ON beitragid = beitraege.ID INNER JOIN kategorien ON kategorieid = kategorien.ID WHERE beitraege.ID = " . $pid);
	$kategorien = $stmt->fetchAll();
	$singleBeitrag[0]['kategorien'] = array();
	foreach($kategorien as $kategorie){
		$singleBeitrag[0]['kategorien'][] = $kategorie['name'];
	}
	return $singleBeitrag;
}

//Autoren aus der Datenbank auslesen
function findAllAuthors($conn){
	//Select zum auslesen der Autoren aus DB
	$stmt = $conn->query("SELECT ID, vorname, nachname FROM autoren");
	$autoren = $stmt->fetchAll();
	return $autoren;
}

function addPost($conn, $data){
	$actualtime = date("Y-m-d", time());
	$stmt = $conn->prepare("INSERT INTO beitraege (titel, inhalt, erstellt, autorid, beitragsbild) VALUES (:titel, :inhalt, :erstellt, :autorid, :beitragsbild )");
	$stmt->bindParam(':titel', $data['titel']);
	$stmt->bindParam(':inhalt', $data['inhalt']);
	$stmt->bindParam(':autorid', intval($data['autor']));
	$stmt->bindParam(':beitragsbild', $data['bild']);
	$stmt->bindParam(':erstellt', $actualtime);
	$stmt->execute();
}


?>

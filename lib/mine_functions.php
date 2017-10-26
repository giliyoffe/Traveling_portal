<?php 
include 'inhalt.php';

// function that reads the .TXT file

function auslesenDaten(){
	return unserialize(file_get_contents("daten/inhalt.txt"));
	// teacher did same as me
};

// sort function nach erstellt param

function sortErstellt(){
	if (isset($_GET['sort']) && $_GET['sort'] == 'erstellt') {
		 		return sortArrayByFields(auslesenDaten(), array('erstellt' => SORT_ASC));
	}
};


function searchforWord($searchword, $array)
{
	$searchArray = array();
	foreach($array as $key => $val) {
		if( strpos($val['titel'], $searchword) !== false || strpos($val['inhalt'], $searchword) !== false) {
			$searchArray[] = $key;	
		}
	}
	if (!empty ($searchArray)) {
		return $searchArray;
	} else {
		return;
	}
};

function temp(){
	$arr = searchForWord("Beitrag", auslesenDaten());
	foreach ($inhalt as $einzelbBeitrag => $value) {
		
	}

	for ($i=0; $i < count($inhalt) < ; $i++) { 
		
	}

	if ($inhalt[]            {

	 } 
};

?>

	
<!--
/* 
Aufgabe für Suche!

1. Schreiben Sie eine Funktion zum sortieren der Beiträge nach Erscheinungsdatum (Absteigend)!

2. 	Das Suchfeld soll funktionieren!
	Nach Eingabe eines Suchbegriffs soll aus dem Gesamtarray eine Ergebnismenge ausgegeben werden. Wenn es kein Ergebnis gibt, dann soll "Leider gibt es zu Ihrem Suchwort kein Ergebnis" ausgegeben werden!
	
	Schreiben Sie eine Funktion die in dem Gesamtarray sucht (anhand des Suchbegriffes) und eventuell ein Ergebnis zurückliefert. 
	
	Ausgabe bleibt wie gehabt auf der Startseite. */ -->
 

<!-- 

// the data from the txt in the index.php insert in a structured way

// mine:
//
// function insertData(){
// 	$array = auslesenDaten();
// 	foreach ($array as $einzelbBeitrag) {
// 			echo $einzelbBeitrag['titel'];
// 			echo $einzelbBeitrag['inhalt'];
// 			echo $einzelbBeitrag['erstellt'];
// 			echo $einzelbBeitrag['bild'];
// 		}
// };

 // Zugriff auf die Functionen  - dont define functions in the index.php -->

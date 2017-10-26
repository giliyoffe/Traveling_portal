<?php
require_once("inc/dbconfig.php");

// Mehrdimentionale Arrays

	$kastenKasten = array(
		"becks" => "VOLL",
		"jever" => "LEER",
		"sixpack" => array(
				"VOLL",
				"VOLL",
				"VOLL",
				"LEER",
				"LEER",
				"LEER",
				),
			);


	$count = 0;

	foreach ($kastenKasten as $key => $einzelWert) {
		if ($einzelWert == "VOLL") {
				$count++;
			}

		if ($key == "sixpack") {
			foreach ($einzelWert as $einzelSixpack) {
				if($einzelSixpack == "VOLL"){
					$count++;
				}
			}
		}

	}

	$testArray = array(
					"Hans",
					"Müller",
					);

	echo implode(", ", $testArray);

?>
<!--
// echo $count;

	// var_dump($kastenKasten);
	// print_r($kastenKasten) //kindof the same

// Implode-function aus Array einen String machen
#http://php.net/manual/en/function.implode.php

// foreach ($kastenKasten as $key => $einzelWert) {
// 	if ($key == "sixpack") {
// 		foreach ($einzelWert as $einzelSixpack) {
// 			echo 	$einzelSixpack . "<br>";
// 		}
// 	}
// }

// Wieviele Flaschen im Gesamten Kasten sind noch voll



//delete probably
/*
echo "<h1>Hallo Welt</h1>";
$meineVariable = " ein Wert";
echo $meineVariable . " neuer Wert";
echo 5.5 . "Eier";
*/

// Arrays in PHP und deren Ausage
/* Ein Mehrzeiliger
Kommentar */
/*
$meineArray = array(
"jever" => "VOLL",
"becks" => "VOLL",
5 => "halbVOLL",
"sternburger" => "LEER",
"bitburger" => "VOLL",
2 => "viertelVOLL",

);

//echo $meineArray[2];

foreach ($meineArray as $key => $einzelWert) {
if ($einzelWert == "VOLL") {
		echo $key . "<br>";
	}

/*
echo $key . "=>";
echo $einzelWert . "<br>";
*//*
}
*/ -->

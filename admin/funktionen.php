<?php 
// ein String
$einString = "Hallo ich bin ein String";

//function gets the number of words in the string
function zaehleWoerter($platzhalter, $trenner = " "){ //default Wert
	$meinArray = explode($trenner, $platzhalter);
	$anzahlWoerter = count($meinArray);
	return $anzahlWoerter;
};
echo zaehleWoerter($einString, "in") . "<br>";
#echo zaehleWoerter("this is a sentence with seven words");

echo str_word_count($einString, 0);

?>

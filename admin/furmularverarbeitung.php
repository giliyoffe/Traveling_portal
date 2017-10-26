<?php 
function sortArrayByFields($arr, $fields)
{
    $sortFields = array();
    $args       = array();

    foreach ($arr as $key => $row) {
        foreach ($fields as $field => $order) {
            $sortFields[$field][$key] = $row[$field];
        }
    }

    foreach ($fields as $field => $order) {
        $args[] = $sortFields[$field];

        if (is_array($order)) {
            foreach ($order as $pt) {
                $args[$pt];
            }
        } else {
            $args[] = $order;
        }
    }

    $args[] = &$arr;

    call_user_func_array('array_multisort', $args);

    return $arr;
}

function gibAlter($datum){
//dd.mm.YYYY
$datumsArray = explode(".", $datum);
// array(15,03,1992);
// 1992-03-15
$jetzt = mktime(0,0,0, date('m'), date('d'), date('Y'));
$geburtstag = mktime(0,0,0, $datumsArray[1], $datumsArray[0], $datumsArray[2]);
$alter = intval(($jetzt - $geburtstag) / (3600 * 24 * 365));
return $alter;
};

function speichereDaten($daten){
	$vorname = $daten['vorname'];
	$nachname = $daten['nachname'];
	$alter = gibAlter($daten['geburt']);
	$datumsArray = array(
				'vorname' => $vorname,
				'nachname' => $nachname,
				'alter' => $alter,
				"zeit" => time()
	);
	// Daten aus Datei auslesen und neue Daten an vorhandene Daten setzen
	$datenAusgelesen = auslesenDaten();
	$datenAusgelesen[] = $datumsArray;
	// Daten mit neuen Daten in Datei schreiben
	file_put_contents("daten.txt", serialize($datenAusgelesen)); //was without FILE_APPEND , FILE_APPEND
};

function auslesenDaten(){
	return unserialize(file_get_contents('daten.txt'));
};

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulare</title>
	<script src="js/main.js"></script>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<div>
			<input type="text" name="vorname" placeholder="Vorname">
		</div>
		<div>
			<input type="text" name="nachname" placeholder="Nachname">
		</div>
		<div>
			<input onkeyup="ueberpruefe(this);" type="text" name="geburt" placeholder="Geburtsdatum (dd.mm.YYYY)">
		</div>
		<!-- <div>
			<input type="date" name="bdayDate" placeholder="Geburtsdatum: (dd.mm.YYYY)"/>
		</div> -->
		<input type="submit" name="absenden" value="Senden">
	</form>
	

	<?php if (isset($_GET['absenden'])) : ?>
		<p> Hallo
			<?php
				if ($_GET['vorname'] != "" && $_GET['nachname'] != "") {
					echo $_GET['vorname'] . " " . $_GET['nachname']; 
				}
			?>
		</p>
		<?php if (!empty($_GET['geburt'])): ?>
		<p>Ihr Alter beträgt: <?php echo gibAlter($_GET['geburt']); ?></p>
		<?php endif; ?>
		<?php speichereDaten($_GET); ?>
	<?php endif; ?>

	<?php if (file_exists("daten.txt")): ?>
		 <?php if (isset($_GET['sort']) && $_GET['sort'] == 'datum') {
		 	$personen =  array_reverse(auslesenDaten());
		 }
		 if (isset($_GET['sort']) && $_GET['sort'] == 'alter'){
		 	$personen =  sortArrayByFields(auslesenDaten(), array('alter' => SORT_ASC, 'vorname' => SORT_DESC));
		 	}else{
		 		$personen = auslesenDaten(); 
		 	}
		 ?>
		 
		 <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=datum">Nach Datum sortieren</a>
		 <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=alter">Nach Alter sortieren</a>
		 <table>
		 	<thead>
		 		<th>Vorname</th>
		 		<th>Nachname</th>
		 		<th>Alter</th>
		 	</thead>
		 	<tbody>
				<?php foreach ($personen as $einzelperson) { ?>
				<tr>
					<td><?php echo $einzelperson['vorname']; ?></td>
					<td><?php echo $einzelperson['nachname']; ?></td>
					<td><?php echo $einzelperson['alter']; ?></td>
				</tr>
				<?php } ?>
		 	</tbody>

		 </table>
	<?php endif; ?>

	

	<!-- <?php
	// my solution
	//Datumsfeld anlegen Format in Datumfeld = dd.mm.YYYY
	// Inhalt aus Formularfeld verarbeiten (Umwandlung in Datumsformat womit berechnet werden kann)
	// Berechnen des Alters der Person (mit Ausgabe des aktuellen Alters)
	//	$age = date_diff(date_create($_GET['bdayDate']), date_create('now'))->y;
	//	echo "Du bist " . $age . " Jahre alt";
	?>  -->



</body>
</html>
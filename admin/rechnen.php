<?php 

// function zum addieren zwei Werten - ergebnis zurückgeben
function addieren($wert1, $wert2){
	$ergebnis = $wert1 + $wert2;
	return $ergebnis;
}


// funktion zum subtrahieren von 2 werte - ergebnis zurückgeben
 
function subtrahieren($wert1, $wert2){
	$ergebnis = $wert1 - $wert2;
	return $ergebnis;
}

if (isset($_POST['berechnen'])) {
	echo "Ergebnis: " . addieren($_POST['wert1'], $_POST['wert2']);
}

if (isset($_POST['berechnen2'])) {
	echo "Ergebnis: " . subtrahieren($_POST['wert1'], $_POST['wert2']);
}
?>

<h2>Absenden mit Post</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?search=Beitrag" method="POST">
	<input type="text" placeholder="Wert 1" name="wert1">
	<input type="text" placeholder="Wert 2" name="wert2">
	<div>
		<input type="submit" name="berechnen" value="Ergebnis (Addition)">
		<input type="submit" name="berechnen2" value="Ergebnis (Subtraktion)">
	</div>
</form>
<pre>
	<?php var_dump($_POST) ?>
</pre>
<pre>
	<?php var_dump($_GET) ?>
</pre>
<pre>
	<?php var_dump($_REQUEST) ?>
</pre>
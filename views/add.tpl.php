<?php
require_once("_header.tpl.php");
?>
<div class="row">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?aktion=add&save=true" method="POST">
		<div class="col-md-6">
			<div class="form-group">
				<label for="titel">Beitragstitel</label>
				<input type="text" class="form-control" name="titel" id="titel">
			</div>
			<div class="form-group">
				<label for="bild">Beitragsbild</label>
				<input type="text" class="form-control" name="bild" id="bild">
			</div>
			<div class="form-group">
				<label for="inhalt">Beitragsinhalt</label>
				<textarea name="inhalt" class="form-control" id="inhalt"></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="autor">Autor</label>
				<select id="autor" class="form-control" name="autor">
					<?php foreach($results as $author){ ?>
						<option value="<?php echo $author['ID']; ?>">
						<?php echo $author['vorname'] . " " . $author['nachname']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<button type="submit" class="btn btn-success">Hinzufügen</button>
		</div>
	</form>
</div>
<?php
require_once("views/_footer.tpl.php");
?>

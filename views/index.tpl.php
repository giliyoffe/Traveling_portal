<?php
require_once("_header.tpl.php");
?>
<div class="row">
	<?php foreach($results as $key => $einzelbeitrag){ ?>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="teaser-box">
				<div class="pic-wrapper">
					<img class="img-responsive" src="<?php echo $einzelbeitrag['beitragsbild']; ?>" alt="Beitragsbild">
					<div class="overlayer">
						Testausgabe auf dem Bild
					</div>
				</div>
				<div class="text-small meta">
					<?php echo date("d.m.Y", strtotime($einzelbeitrag['erstellt'])); ?>
					<?php echo $einzelbeitrag['benutzername']; ?>
					<div>
						<span class="category">
							<?php echo implode(" | ", $einzelbeitrag['kategorien']) ?>
						</span>
					</div>
				</div>
				<div class="text-big title text-center">
					<h3><a href="<?php echo $_SERVER['PHP_SELF']; ?>?aktion=single&pid=<?php echo $einzelbeitrag['ID']; ?>"><?php echo $einzelbeitrag['titel']; ?></a></h3>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<?php
require_once("_footer.tpl.php");
?>

<?php 
require_once("views/_header.tpl.php");
?>
<div class="row">
	<?php foreach($results as $key => $einzelbeitrag){ ?>	
		<div class="col-md-5 col-sm-5 col-xs-12">
			<img class="img-responsive" src="<?php echo $einzelbeitrag['beitragsbild']; ?>" alt="Beitragsbild">
		</div>
		<div class="col-xs-12">
				<div class="text-small meta">
					<?php echo date("d.m.Y", strtotime($einzelbeitrag['erstellt'])); ?>
					<?php echo $einzelbeitrag['benutzername']; ?>
					<div>
						<span class="category">
							<?php echo implode(" | ", $einzelbeitrag['kategorien']) ?>
						</span>
					</div>
				</div>
				<div class="text-big title text-left">
					<h1><?php echo $einzelbeitrag['titel']; ?></h1>
				</div>
				<div class="text-big">
					<p><?php echo $einzelbeitrag['inhalt']; ?></p>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<?php 
require_once("views/_footer.tpl.php");
?>
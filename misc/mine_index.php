<?php
	require "lib/functions.php";
	//include 'inhalt.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO</title> <!-- TODO -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="js/main.js"></script> -->
	<script type="text/javascript" src="js/oldschool.js"></script>
</head>
<body>
	<header>
		<div class="container">
	<div class="row">

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Navigation ein-/ausblenden</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Bootstrap Test</a>
		    </div>
		    </div>
			<?php if (isset($_GET['sort']) && $_GET['sort'] == 'erstellt') {
					sortErstellt();
			 	} ?>
		    <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home <span class="sr-only">(aktuell)</span></a></li>
		        <li><a href="#">Kontakt</a></li>

		        <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?sort=erstellt">Sortieren</a></li>
		      </ul>
	     	  <ul class="nav navbar-nav navbar-right">
				<!-- <li id="innerMeldung"></li> -->
			      <form class="hide search-form" method="GET" action="index.html">
				      <div class="form-group">
				      	<input type="text" name="search" class="search-field form-control">
				      </div>
			      </form>
		        <li class="search-list"><a onclick="checkField();" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		        </a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
	<header>

	<section class="container">
	<div class="row">
	<?php foreach($result as $einzelbBeitrag) { ?>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="img">
				<img src="<?php echo $einzelbBeitrag['bild']; ?>" class="img-responsive">
			</div>
			<div class="meta">
				<?php echo date("d.m.y", strtotime($einzelbBeitrag['erstellt'])); ?>
			</div>
			<h1>
				<?php echo $einzelbBeitrag['titel']; ?>
			</h1>
			<p>
			<?php echo $einzelbBeitrag['inhalt']; ?>
			</p>
		</div>
		<!-- mine:
		<div class="col-md-6 col-sm-8 col-xs-12">
			<?php  //insertData(); ?>
		</div> -->
	<?php } ?>
	</div>

	</section>
	<?php print_r(searchForWord("Beitrag", auslesenDaten())); ?>
	<footer>
	</footer>
</body>
</html>

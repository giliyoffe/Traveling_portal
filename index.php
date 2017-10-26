<?php
	require_once("admin/inc/dbconfig.php");
	require_once "lib/functions.php";
	require_once "inhalt.php";

	$results = leseDaten();
	if(isset($_GET['search'])){
		$results = getSearchResult($_GET['search'], $results);
	}

	$loginUrl = 'http://appm52/US-FI201/GYoffe/_take%202%20_YoffeProjekt_REISEN_PORTAL/admin/sessions/loginsystem/login.php';
?>
<!DOCTYPE html>
<head>
	<title>Reiseinformationsportal Homepage</title> <!-- TODO -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/oldschool.js"></script>



</head>
<body style="color: white;">
	<!-- <a href="<?php echo $loginUrl	?>" >test php</a> -->

	<section class="container">

			 <!-- login -->

			 <!-- <a href="/admin/sessions/loginszstem/login.php"><button style="width:auto;">Login</button></a> -->

<!-- //Login with php -->
		<!-- <a href="http:\\appm52\US-FI201\GYoffe\_take%202%20_YoffeProjekt_REISEN_PORTAL\admin\sessions\loginsystem\login.php">
			<button id="phpBtn"style="width:auto;">Login with php</button>
		</a> -->

	<!-- w3s 11:14 -->
		<button id="cssbtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

			<div id="id01" class="modal">

			  <form class="modal-content animate" action="admin/sessions/loginsystem/reisen.php">
			    <div class="imgcontainer">
			      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			      <img src="img/userPicAvatars.png" alt="Avatar" class="avatar">
			    </div>

			    <div class="container">
			      <label><b>Username</b></label>
			      <input style="color:black;" type="text" placeholder="Enter Username" name="uname" required>

			      <label><b>Password</b></label>
			      <input style="color:black;" type="password" placeholder="Enter Password" name="psw" required>

			      <button style="color:black;" type="submit" href="<?php echo $loginUrl ?>">Login</button>
			      <!-- <input type="checkbox" checked="checked"> Remember me -->
			    </div>

			    <!-- <div class="container" style="background-color:#f1f1f1">
			      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			      <span class="psw">Forgot <a href="#">password?</a></span>
			    </div> -->
			  </form>
			</div>
			<br>
			<br>
			<br>

			<!--  TODO move down or sciprt in separate  js file -->
			<script>
					// Get the modal
					var modal = document.getElementById('id01');

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
					    if (event.target == modal) {
					        modal.style.display = "none";
					    }
					}
			</script>

	<!-- ende w3s 11:14 -->
	<br>
	<br>
<br>

					<!-- Pics section -->
					<!-- class="circle-avatar"> -->
								<div class="row">

									<?php
									if (isset($_GET['sort']) && $_GET['sort'] == 'erstellt'){
									 foreach($results as $einzelbeitrag){
										 	$results =  sortArrayByFields(leseDaten(), array('erstellt' => SORT_ASC));
										 };
										}
								 	 ?>

									<?php foreach($results as $einzelbeitrag){ ?>
										<div class="box-height col-sm-4 col-sm-4 col-sm-4" >
											<div class="teaser-box">
												<div class="pic-wrapper">
										<!-- class="round" id="round" > -->
											<div class="img" class="teaser-box" alt="Ok" width="304" height="236">
												<!-- class="img-circle" -->
												<a href="<?php echo $einzelbeitrag['url']	?>">
													<img src="<?php echo $einzelbeitrag['bild']; ?>" class="img-responsive">
												</a>
											</div>
										</div>
											</div>

											<h1>
												<?php echo $einzelbeitrag['titel']; ?>
											</h1>
											<p>
												<!--?php echo $einzelbeitrag['inhalt']; ?-->
											</p>
										</div>
									<?php } ?>
								</div>
								<!-- end of Pics section -->


		<!-- was:
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

			<!-- <div id="id01" class="modal">

		  <form class="modal-content animate" action="/action_page.php">
					    <div class="imgcontainer">
					      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					      <img src="img/userPicAvatars.png" alt="Avatar" class="avatar">
					    </div>

					    <div class="container">
					      <label><b>Username</b></label>
					      <input type="text" placeholder="Enter Username" name="uname" required>

					      <label><b>Password</b></label>
					      <input type="password" placeholder="Enter Password" name="psw" required>

					      <button type="submit">Login</button>
					      <input type="checkbox" checked="checked"> Remember me
					    </div>

						    <div class="container" style="background-color:#f1f1f1">
						      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						      <span class="psw">Forgot <a href="#">password?</a></span>
						    </div>
			  </form>
			</div> -->

				<!-- login -->
						 <!--was body with id="container" maybe remove '../' -->
						<!-- style="background-color: #6da4db; -->
						<!-- "background-color: #654566;" background-image: url('../img/woods-wallpaper.jpg');-->
						<!--a href="http://getbootstrap.com/components/#media">
							<img src="http://lorempixel.com/200/200/sports" alt="" />
							<span>You know you wanna click that mouse... just do it (copyright Nike inc.)</span>
						</a>
						<a href="why.html">
							<img src="http://lorempixel.com/400/200/sports/2" alt="" />
							<span>You know you wanna click that mouse... just do it (copyright Nike inc.)</span>
						</a-->


					<!-- change body on hover -->
					<!-- /*1214*/ -->
					<!--
						<div id="trigger" ></div>
					--><!-- class="label label-success" -->
					<!--div id="bg">
					</div> -->
					<!-- change body on hover -->

						<!-- <header>

							<div class="container-fluid" style="background-color: black;">
								<div class="row">
								<nav class="navbar navbar-default">-->
					    <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->

						<!--

						  <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Navigation ein-/ausblenden</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Bootstrap Test</a>

							</div>-->

					    <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
					<!--
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active"><a href="#">Home <span class="sr-only">(aktuell)</span></a></li>
									<li><a href="#">Kontakt</a></li>

								</ul>
								<ul class="nav navbar-nav navbar-right">
									<form class="hide search-form" method="GET" action="index.php">
										<div class="form-group">
											<input type="text" name="search" class="search-field form-control" >
										</div>
									</form>
									<li class="search-list"><a onclick="checkField();" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>

									<li><a href="<?php //echo $_SERVER['PHP_SELF']; ?>?sort=erstellt">Sortieren</a></li>
								</ul>
								</div>
							</nav>
							</div>
							</div>

				</header>-->


				<!-- onclick="doSomething();" -->

			<!-- new -->
				<!-- search-form thingy -->
					<!-- <ul class="nav navbar-nav navbar-right">
						<form class="hide search-form" method="GET" action="index.php">
							<div class="form-group">
								<input type="text" name="search" class="search-field form-control" >
							</div>
						</form>
						<li class="search-list"><a onclick="checkField();" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>

						<li><a href="<!?php echo $_SERVER['PHP_SELF']; ?>?sort=erstellt">Sortieren</a></li>
					</ul>
					</div> -->


					<!-- new codepan-->

								<!-- <div id="container">
						  <a href="http://getbootstrap.com/components/#media">
						    <img src="http://lorempixel.com/200/200/sports" alt="" />
						    <span>You know you wanna click that mouse... just do it (copyright Nike inc.)</span>
						  </a>
						  <a href="why.html">
						    <img src="http://lorempixel.com/400/200/sports/2" alt="" />
						    <span>You know you wanna click that mouse... just do it (copyright Nike inc.)</span>
						  </a>
						</div> -->

	</section>


					<!-- another waz w3school -->
					<!--
						<h2>Fade in Overlay</h2>
						<p>Hover over the image to see the effect.</p>

						<div class="container">
							<img src="img/south_korea_seoul4.jpg" alt="Avatar" class="image">
							<div class="overlay">
								<div class="text">works! now change it</div>
							</div>
						</div> -->

					<!-- end new -->

	<footer>
	</footer>


	<!--  for the w3school example

	 <script>
	// login
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
	// login
	</script> -->
</body>

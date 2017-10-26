<?php
session_start();
require_once "functions.php";
require_once("../../inc/dbconfig.php");

//testing
// $_SESSION['eingeloggt'] = false;

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
  <link rel="stylesheet" href="../css/loginStyle.css">
 	<title>Login</title>
 </head>
 <body>

<!-- <h1>ORIGINAL</h1> -->

 	<h1>Login</h1>
  <br>
 	<form action="eingeloggt.php" method="POST"> <!-- had action= <?php echo $_SERVER['PHP_SELF']; ?> or eingeloggt.php -->
 		<div>
 			<input type="text" name="benutzername" placeholder="User Name">
 		</div>
		<div>
			<input type="password" name="passwort" placeholder="Password">
		</div>
			<!-- <a href="http://appm52/US-FI201/GYoffe/_take%202%20_YoffeProjekt_REISEN_PORTAL/admin/sessions/seite2.php"> -->
      <div>
    		<input type="submit" name="login" value="Einloggen">
  		</div>
      <!-- </a> -->
		<!-- <div>
			<input type="submit" name="neu" value="Neuer Benutzer">
		</div> -->

 	</form>
  <br>
  <br>
   <!-- ?php echo ; ?-->
  <br>

  <!-- tests -->
  <!-- <h3>tests</h3>
      <form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
      </form>
    <?php //var_dump($_POST['email']); ?> -->
<!--
  Welcome <!?php echo $_POST["name"]; ?><br>
  Your email address is: <!?php echo $_POST["email"]; ?> -->
<!--
  <div>
    <input action="<?php //echo $_POST['s']; ?>" type="submit" name="test" value="Test">
  </div>

<?php // var_dump($_SESSION['eingeloggt']); ?>
 -->

  <!-- end tests -->
  <br>
  <br>
 <!-- 	<pre>
	 	<?php  print_r($benutzer);
	 	?>
 	</pre> -->

  <a href="http:\\appm52\US-FI201\GYoffe\_take%202%20_YoffeProjekt_REISEN_PORTAL\"><button style="width:auto;">Homepage</button></a>

 </body>
 </html>

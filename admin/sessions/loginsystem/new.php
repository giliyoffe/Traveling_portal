<?php
require_once("views/_header.tpl.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <h3>Add new Offer</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
      <input type="text" name="ZielOrt" placeholder="Ziel Ort">
    </div>
    <div>
      <input type="text" name="pries" placeholder="Pries">
    </div>
    <div>
      Beginn Datum: <input type="date" name="beginnDatum" placeholder="Beginn Datum">
    </div>
    <div>
      Ende Datum: <input type="date" name="endeDatum" placeholder="Ende Datum">
    </div>

    <div>
      <input type="text" name="kurzbeschreibung" size="35" placeholder="kurzbeschreibung">
    </div>
    <div>
      <input type="text" name="beschreibung" size="100" placeholder="beschreibung">
    </div>

    <div>
      Bild: <input type="file" name="pic" accept="image/*" placeholder="Bild">
    </div>
    <br>
    <div>
      <input type="submit" value="Save" name="saved"> ** comming soon :) **
      <!-- was > name="gesendet" -->
    </div>
  </form>
  <br>

  <!-- chose pic -->
    <form action="/action_page.php">
      <!-- Bild: <input type="file" name="pic" accept="image/*" placeholder="Bild"> -->
    <!-- <input type="submit"> -->
    </form>
  <br>
  <a href="http://appm52/US-FI201/GYoffe/_take%202%20_YoffeProjekt_REISEN_PORTAL/">Logout</a>

  </body>
</html>

<!-- build/write  page  with all angebotes and that each has an editing button
seite 3 in pages
 -->
 <?php
 require_once("views/_header.tpl.php");
 // require_once("../../inc/dbconfig.php");
 // require_once "../../../lib/functions.php";
 // require_once "../../../inhalt.php";

 // $results = leseDaten();
 // if(isset($_GET['search'])){
 //   $results = getSearchResult($_GET['search'], $results);
 // }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Backend Menu</title>

 <!-- TODO move to seperate css datei -->
 <style media="screen">

              body {
              font-family: "Lato", sans-serif;
              }

              .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
              }

              .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
              }

              .sidenav a:hover, .offcanvas a:focus{
              color: #f1f1f1;
              }

              .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
              }

              @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
              }

</style>
</head>
<body>
  <section>

     <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <a href="new.php">Neue Reise</a>
       <a href="#">Gesamtübersicht</a>
       <a href="../../../index.php">Homepage Site</a>
        <!-- // TODO: show FE of the specific edited view('this' view) ** -->
       <a href="../../../why.html">Don't ever press here!!!</a>
     </div>

     <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

   	</section>

   		<br>
   		<br>
   		<br>

   	<a href="http://appm52/US-FI201/GYoffe/_take%202%20_YoffeProjekt_REISEN_PORTAL/">Logout</a>

     <!-- <button type="button" name="new"></button> -->

     <script> // TODO: move to separate datei
     function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
     }

     function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
     }
     </script>
   </body>
 </html>

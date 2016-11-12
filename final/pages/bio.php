<!DOCTYPE html>

<!--
FILE NAME: final/pages/bio.php
WRITTEN BY: Jakob Nordnes, Sondre Stai
WHEN: October 2016
PURPOSE: Show the biography page
-->

<html>

<head>
  <?php include "header.php";?>
  <title>Biografi</title>
</head>

<body>
  <!-- The navigation menu -->
  <?php include "navbar.php";?>

  <div class="row">
    <div class="col-2 sidemenu">
      <ul>
        <li> <a href="bok.php">Bok</a> </li>
        <li> <a href="kontakt.php">Kontakt</a> </li>
        <li> <a href="bio.php"><span>Biografi</span></a> </li>
      </ul>
    </div>
    <div class="col-3">
      <img src="../img/Selvportrett.jpg" alt="Daniel Bolstad" class="sidebilde" />
    </div>
    <div class="bok col-5">
      <h1>Biografi</h1>
      <hr />
      <p> Born in Lier, Norway to an American mother and Norwegian father, Bolstad
        showed an interest in art from an early age. Educated in media, he worked
        as a journalist and photographer for the local town paper. As his experience
        grew he became increasingly interested in art film and art photography.
        After studying photography in folk college he began studying at the Norwegian School
        of Photography. (2015 - current).</p>
      <hr />
    </div>
    <div class="col-2"></div>
  </div>
</body>

</html>

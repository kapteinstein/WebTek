<!DOCTYPE html>

<!--
FILE NAME: final/pages/pandora.php
WRITTEN BY: Ingrid Ege Tørres, Torjus Sandviken, Erik Liodden
WHEN: October 2016
PURPOSE: Show the Pandora gallery images
-->

<html>

<head>
  <?php include "slideshowHeader.php";?>
  <title>Pandora</title>
</head>

<body>
  <!-- The navigation menu -->
  <?php include "navbar.php";?>

  <!-- Slide show -->
  <div id="modalBox">
    <div id="slideShowContainer">
      <img id="slideImage" data-imageid="1" alt="slideshow image" src="../img/Pandora/Pandora.jpg" />
      <a id="prevBtn" class="prev">&#10094;</a>
      <a id="nextBtn" class="next">&#10095;</a>
    </div>
  </div>

  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-10 pandora bildeserie">
      <img id="1" class="image" src="../img/Pandora/Pandora.jpg" alt="Pandora1" />
      <img id="2" class="image" src="../img/Pandora/Pandora2.jpg" alt="Pandora2" />
      <img id="3" class="image" src="../img/Pandora/Pandora3.jpg" alt="Pandora3" />
      <img id="4" class="image" src="../img/Pandora/Pandora4.jpg" alt="Pandora4" />
      <img id="5" class="image" src="../img/Pandora/Pandora5.jpg" alt="Pandora5" />
    </div>
    <div class="col-1"></div>
  </div>
</body>

</html>

<!DOCTYPE html>

<!--
FILE NAME: final/pages/cinematics.php
WRITTEN BY: Ingrid Ege Tørres, Torjus Sandviken, Erik Liodden
WHEN: October 2016
PURPOSE: Show the Cinematics gallery images
-->

<html>

<head>
  <?php include "slideshowHeader.php";?>
  <title>Cinematics</title>
</head>

<body>
  <!-- The navigation menu -->
  <?php include "navbar.php";?>

  <!-- Slide show -->
  <div id="modalBox">
    <div id="slideShowContainer">
      <img id="slideImage" data-imageid="1" alt="slideshow image" src="../img/Cinematics/Cinematics.jpg" />
      <a id="prevBtn" class="prev">&#10094;</a>
      <a id="nextBtn" class="next">&#10095;</a>
    </div>
  </div>

  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-5 cinematics bildeserie">
      <img id="1" class="image" alt="1" src="../img/Cinematics/Cinematics.jpg" />
      <img id="3" class="image" alt="3" src="../img/Cinematics/Cinematics3.jpg" />
      <img id="5" class="image" alt="5" src="../img/Cinematics/Cinematics5.jpg" />
      <img id="7" class="image" alt="7" src="../img/Cinematics/Cinematics7.jpg" />
    </div>
    <div class="col-5 cinematics bildeserie">
      <img id="2" class="image" alt="2" src="../img/Cinematics/Cinematics2.jpg" />
      <img id="4" class="image" alt="4" src="../img/Cinematics/Cinematics4.jpg" />
      <img id="6" class="image" alt="6" src="../img/Cinematics/Cinematics6.jpg" />
      <img id="8" class="image" alt="8" src="../img/Cinematics/Cinematics8.jpg" />
    </div>
    <div class="col-1"></div>
  </div>
</body>

</html>

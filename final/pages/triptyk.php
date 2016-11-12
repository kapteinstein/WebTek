<!DOCTYPE html>

<!--
FILE NAME: final/pages/triptyk.php
WRITTEN BY: Ingrid Ege Tørres, Torjus Sandviken, Erik Liodden
WHEN: October 2016
PURPOSE: Show the Triptyk gallery images
-->

<html>

<head>
  <?php include "slideshowHeader.php";?>
  <title>Triptyk</title>
</head>

<body>
  <!-- The navigation menu -->
  <?php include "navbar.php";?>

  <!-- Slide show -->
  <div id="modalBox">
    <div id="slideShowContainer">
      <img id="slideImage" data-imageid="1" alt="slideshow image" src="../img/Triptyk/Triptyk1.jpg" />
      <a id="prevBtn" class="prev">&#10094;</a>
      <a id="nextBtn" class="next">&#10095;</a>
    </div>
  </div>

  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-10 triptyk bildeserie">
      <img id="1" class="image" src="../img/Triptyk/Triptyk1.jpg" alt="Triptyk1" />
      <img id="2" class="image" src="../img/Triptyk/Triptyk2.jpg" alt="Triptyk2" />
    </div>
    <div class="col-1"></div>
  </div>
</body>

</html>

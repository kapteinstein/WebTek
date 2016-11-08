<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Pandora</title>
</head>

<body onload="fadeAtLoad();">
  <!-- The navigation menu -->
  <nav class="row">
    <?php include "navbar.php";?>
  </nav>

  <!-- Slide show -->
  <div id="modalBox">
    <div class="slideShowContainer">
      <img id="slideImage" data-imageid="1" />
      <a id="prevBtn" class="prev">&#10094;</a>
      <a id="nextBtn" class="next">&#10095;</a>
    </div>
  </div>

  <!--<div class="row">
    <div id="giPLASS" class="col-12"></div>
  </div> -->
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
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>
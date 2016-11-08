<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Triptyk</title>
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
  </div>-->
  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-10 triptyk bildeserie">
      <img id="1" class="image" src="../img/Triptyk/Triptyk1.jpg" alt="Triptyk1" />
      <img id="2" class="image" src="../img/Triptyk/Triptyk2.jpg" alt="Triptyk2" />
    </div>
    <div class="col-1"></div>
  </div>
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>

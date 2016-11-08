<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Cinematics</title>
</head>

<body onload="fadeAtLoad();">
  <!-- The navigation menu -->
  <nav class="row">
    <?php include "navbar.php";?>
  </nav>

  <!-- Slide show -->
  <div id="modalBox">
    <div class="slideShowContainer">
      <img id="slideImage" data-imageid="1" src="" />
      <a id="prevBtn" class="prev">&#10094;</a>
      <a id="nextBtn" class="next">&#10095;</a>
    </div>
  </div>

  <!--<div class="row">
    <div id="giPLASS" class="col-12"></div>
  </div>-->
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
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>

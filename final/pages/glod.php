<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Gloed</title>
</head>

<body onload="fadeAtLoad();">
  <!-- The navigation menu -->
  <?php include "navbar.php";?>

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

  <div id="mainContainer">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-5 glod bildeserie">
      <img id="1" class="image" src="../img/Gloed/Gloed_1.jpg" alt="glod1" />
    </div>
    <div class="col-5 glod bildeserie">
      <img id="2" class="image" src="../img/Gloed/Gloed_2.jpg" alt="glod2" />
    </div>
    <div class="col-1"></div>
  </div>
  <!-- avslutter row -->

  <div class="row">
    <div class="col-1"></div>
    <div class="col-10 glod_enkel bildeserie">
      <img id="3" class="image" src="../img/Gloed/Gloed_3.jpg" alt="glod3" />
      <img id="4" class="image" src="../img/Gloed/Gloed_4.jpg" alt="glod4" />
    </div>
    <div class="col-1"></div>
  </div>
  </div>
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Matthew</title>
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
  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-5 matthew bildeserie">
      <img id="1" class="image" src="../img/Matthew/Matthew.jpg" alt="Matthew1" />
      <img id="3" class="image" src="../img/Matthew/Matthew3.jpg" alt="Matthew3" />
      <img id="5" class="image" src="../img/Matthew/Matthew5.jpg" alt="Matthew5" />
      <img id="7" class="image" src="../img/Matthew/Matthew7.jpg" alt="Matthew7" />
    </div>
    <div class="col-5 matthew bildeserie">
      <img id="2" class="image" src="../img/Matthew/Matthew2.jpg" alt="Matthew2" />
      <img id="4" class="image" src="../img/Matthew/Matthew4.jpg" alt="Matthew4" />
      <img id="6" class="image" src="../img/Matthew/Matthew6.jpg" alt="Matthew6" />
      <img id="8" class="image" src="../img/Matthew/Matthew8.jpg" alt="Matthew8" />
      <img id="9" class="image" src="../img/Matthew/Matthew9.jpg" alt="Matthew9" />
    </div>
    <div class="col-1"></div>
  </div>
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>

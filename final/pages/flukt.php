<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Flukt</title>
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

  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-10 flukt bildeserie">
      <img id="1" class="image"  src="../img/Flukt/Exodus.jpg" alt="Flukt1" />
      <img id="2" class="image" src="../img/Flukt/Exodus2.jpg" alt="Flukt2" />
      <img id="3" class="image" src="../img/Flukt/Exodus3.jpg" alt="Flukt3" />
      <img id="4" class="image" src="../img/Flukt/Exodus4.jpg" alt="Flukt4" />
      <img id="5" class="image" src="../img/Flukt/Exodus5.jpg" alt="Flukt5" />
      <img id="6" class="image" src="../img/Flukt/Exodus6.jpg" alt="Flukt6" />
      <img id="7" class="image" src="../img/Flukt/Exodus7.jpg" alt="Flukt7" />
      <img id="8" class="image" src="../img/Flukt/Exodus8.jpg" alt="Flukt8" />
      <img id="9" class="image" src="../img/Flukt/Exodus9.jpg" alt="Flukt9" />
      <img id="10" class="image" src="../img/Flukt/Exodus10.jpg" alt="Flukt10" />
      <img id="11" class="image" src="../img/Flukt/Exodus11.jpg" alt="Flukt11" />
    </div>
    <div class="col-1"></div>
  </div>
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>

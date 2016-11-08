<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Icarus</title>
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

  <!-- <div class="row">
    <div id="giPLASS" class="col-12"></div>
  </div> -->
  <div id="mainContainer" class="row">
    <div class="col-1"></div>
    <div class="col-10 icarus bildeserie">
      <img id="1" class="image" src="../img/Icarus/Icarus.jpg" alt="Icarus1" />
      <img id="2" class="image" src="../img/Icarus/Icarus2.jpg" alt="Icarus2" />
      <img id="3" class="image" src="../img/Icarus/Icarus3.jpg" alt="Icarus3" />
      <img id="4" class="image" src="../img/Icarus/Icarus4.jpg" alt="Icarus4" />
      <img id="5" class="image" src="../img/Icarus/Icarus5.jpg" alt="Icarus5" />
      <img id="6" class="image" src="../img/Icarus/Icarus6.jpg" alt="Icarus6" />
      <img id="7" class="image" src="../img/Icarus/Icarus7.jpg" alt="Icarus7" />
      <img id="8" class="image" src="../img/Icarus/Icarus8.jpg" alt="Icarus8" />
    </div>
    <div class="col-1"></div>
  </div>
  <!-- avslutter row -->
  <script src="../js/fade.js"></script>
</body>

</html>

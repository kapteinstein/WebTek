<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include "header.php";?>
  <title>Daniel Bolstad</title>
</head>

<body onload="fadeAtLoad();">
  <!-- The navigation menu -->
  <nav class="row">
    <?php include "navbar.php";?>
  </nav>

  <!-- The sidebar -->
  <div class="col-2 sidemenu">
    <ul>
      <li> <a href="bok.html">Bok</a> </li>
      <li> <a href="kontakt.html">Kontakt</a> </li>
      <li> <a href="bio.html">Biografi</a> </li>
    </ul>
  </div>

  <!-- The page content -->
  <!-- TODO: Delete if navbar works -->
  <div class="row">
    <div class="col-3">
      <img src="../img/test2.png" alt="test" id="hanIStolen" class="sidebilde" />
    </div>
    <div class="bok col-5">
      <hr />
      <p> Daniel Bolstad lives and works in Trondheim, Norway. His
      multidisciplinary work is mainly focused on creating tableaus using film,
      photography and illustration, to explore questions of identity and
      reality. In these tableaus a surrealistic theatre plays out - one without
      a beginning or an end. One that opposes classical theatre by imposing no
      truth or objectivity. Here the viewer is encouraged to interpret the works
      themselves. He currently studies at the Norwegian School of
      Photography.</p>
      <hr />
    </div>
    <div class="col-2"></div>
  </div>
</body>

</html>
<!--
FILE NAME: final/pages/navbar.php
WRITTEN BY: Erik Liodden, Torjus Sandviken
WHEN: October 2016
PURPOSE: php script for reusing navigation bar in all pages.
-->

<?php
echo '
  <nav class="row" id="navbar">
    <div class="menu">
      <div class="submenu">
        <a href="cinematics.php">Cinematics</a>
        <a href="triptyk.php">Triptyk</a>
        <a href="flukt.php">Flukt</a>
        <a href="glod.php">Glød</a>
      </div>
      <div class="dropdown">
        <a href="main.php"><span id="author">Daniel Bolstad</span></a>
        <div class="dropdown-menu">
          <div class="dropdown-menu-items">
            <a href="bok.php">Bok</a>
            <a href="kontakt.php">Kontakt</a>
            <a href="bio.php">Biografi</a>
          </div>
        </div>
      </div>
      <div class="submenu">
        <a href="pandora.php">Pandora</a>
        <a href="icarus.php">Icarus</a>
        <a href="matthew.php">Matthew</a>
        <a href="kings.php">Kings</a>
      </div>
    </div>
    <hr />
  </nav>';
?>

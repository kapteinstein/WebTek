<!--
FILE NAME: final/pages/email.php
WRITTEN BY: Sondre Stai, Jakob Nordnes
WHEN: October 2016
PURPOSE: Send contact message to the webmaster email
-->

<?php
    mail('sondre.stai@gmail.com', $_POST['name'],$_POST['email'],$_POST['henvendelse'],
     $_POST['message']);
?>
<p>Din hendvendelse har blitt sent. <a href="main.php">Tilbake</a></p>

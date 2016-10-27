<?php
    mail('sondre.stai@gmail.com', $_POST['name'],$_POST['email'],$_POST['henvendelse'],
     $_POST['message']);
?>
<p>Din hendvendelse har blitt sent</p>

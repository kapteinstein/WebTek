<!DOCTYPE html>
<html>

<head>
  <?php include "header.php";?>
  <title>Kontakt</title>
</head>

<body onload="fadeAtLoad();">
  <!-- The navigation menu -->
  <?php include "navbar.php";?>

  <div class="row">
    <div class="col-2 sidemenu">
      <ul>
        <li> <a href="bok.html">Bok</a> </li>
        <li> <a href="kontakt.html"><span class="active">Kontakt</span></a> </li>
        <li> <a href="bio.html">Biografi</a> </li>
      </ul>
    </div>
    <div class="bok col-8">
      <h1>Kontakt</h1>
      <form class=contactform id=contact name=contact action="email.php" onsubmit="return validateForm()" method="post">
        <fieldset>
          <legend>Kontakt Daniel Bolstad</legend>
          <label>Fullt navn: </label> <p id="validResName" class=valid> </p>
            <input type=text name=name placeholder="F. eks. Ola Nordmann" /><br />
          <label>E-mail: </label> <p id="validResEmail" class=valid> </p>
            <input type=text name=email placeholder="e.g. ola@nordmann.no" /> <br />
          <label>Type henvendelse:  </label> <p id="validResHenvendelse" class=valid> </p>
            <input type=text name=henvendelse placeholder="F. eks. spørsmål"><br />

          <label>Melding: </label>
            <textarea name=message form=contact id=message
            placeholder="Skriv meldingen din her"></textarea>
          <input type=submit name=submit value=Send />
        </fieldset>
      </form>
    </div>
    <div class="col-2"></div>
  </div> <!-- avslutter row -->
  </body>
</html>

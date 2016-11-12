<!DOCTYPE html>
<html>
<head>
    <link rel=stylesheet type="text/css" href="../css/styles.css" />
    <script src="../js/formvalidator.js"></script>
    <meta charset="UTF-8" />
</head>
<body>
  <div class="formwrap">
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
          <textarea name=message form=contact id=message>
            Skriv meldingen din her
          </textarea>
        <input type=submit name=submit value=Send />
      </fieldset>
    </form>
  </div>
</body>

</html>

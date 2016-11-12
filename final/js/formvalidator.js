//
// FILE NAME: final/js/formvalidator.js
// WRITTEN BY: Sondre Stai
// WHEN: October 2016
// PURPOSE: Validate the contact form
//

function validateForm() {
  var x = document.forms["contact"]["name"].value;

  // sjekker at navnefeltet ikke er tomt
  if (x == null || x == "") {
    document.getElementById("validResName").innerHTML = "Navn må fylles inn";
    document.forms["contact"]["name"].style.backgroundColor = "#FF8080";
    return false;
  }
  var y = document.forms["contact"]["email"].value;
  var alfaposi = y.indexOf("@");
  var dotposi = y.lastIndexOf(".");

  // sjekker at eposten er fylt inn og at den er i riktig format
  if (y == null || y == "") {
    document.getElementById("validResEmail").innerHTML = "E-post må fylles inn";
    document.forms["contact"]["email"].style.backgroundColor = "#FF8080";
    return false;

  // Sjekker at det er skrevet noe før og etter alfakrøllen, og at det er
  // to eller flere tegn etter siste punktum
  } else if (alfaposi < 1 || dotposi < alfaposi + 2 || dotposi + 2 >= y.length) {
    document.getElementById("validResEmail").innerHTML = "E-posten er i feil format";
    document.forms["contact"]["email"].style.backgroundColor = "#FF8080";
    return false;
  }
  var z = document.forms["contact"]["henvendelse"].value;

  // sjekker at hendelse-feltet ikke er tomt
  if (z == null || z == "") {
    document.getElementById("validResHenvendelse").innerHTML = "Type henvendelse må fylles inn";
    document.forms["contact"]["henvendelse"].style.backgroundColor = "#FF8080";
    return false;
  }
}

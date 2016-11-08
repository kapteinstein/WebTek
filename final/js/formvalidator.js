function validateForm() {
    var x = document.forms["contact"]["name"].value;
    if (x == null || x == "") {
        document.getElementById("validResName").innerHTML = "Navn må fylles inn";
        document.forms["contact"]["name"].style.backgroundColor = "#FF8080";
        return false;
    }
    var y = document.forms["contact"]["email"].value;
    var alfaposi = y.indexOf("@");
    var dotposi = y.lastIndexOf(".");
    if (y == null || y == "") {
        document.getElementById("validResEmail").innerHTML = "E-post må fylles inn";
        document.forms["contact"]["email"].style.backgroundColor = "#FF8080";
        return false;
    } else if(alfaposi<1 || dotposi < alfaposi + 2 || dotposi + 2 >= y.length ) {
      document.getElementById("validResEmail").innerHTML = "E-posten er i feil format";
      document.forms["contact"]["email"].style.backgroundColor = "#FF8080";
      return false;
    }
    var z = document.forms["contact"]["henvendelse"].value;
    if (z == null || z == "") {
        document.getElementById("validResHenvendelse").innerHTML = "Type henvendelse må fylles inn";
        document.forms["contact"]["henvendelse"].style.backgroundColor = "#FF8080";
        return false;
    }

}

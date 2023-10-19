function getDataFromForm() {
  alert("it worked!");
  var fname = document.getElementsByName("fname");
  var lname = document.getElementsByName("lname");
  runAjax(fname, lname);
}

function runAjax(fname, lname) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("stringResponse").innerHTML = this.responseText;
    }
  xhttp.open("GET", "ajax.php" + "?fname=" + fname + "&lname=" + lname, true);
  xhttp.send();
}
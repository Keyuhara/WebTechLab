function getDataFromForm() {
  alert("it worked!");
  let fname = document.getElementsByName("fname")[0].value;
  let lname = document.getElementsByName("lname")[0].value;
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
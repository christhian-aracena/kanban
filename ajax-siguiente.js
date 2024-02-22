const btnGrupal = document.querySelector("#grupal");

btnGrupal.addEventListener("click", function () {
  get_next();
});

function get_next() {
  const xhttp2 = new XMLHttpRequest();
  xhttp2.open("GET", "party-next.html", true);
  xhttp2.send();

  xhttp2.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector("#siguiente").innerHTML = this.responseText;
      
    }
  };
}

const btnIndividual = document.querySelector("#single");

btnIndividual.addEventListener("click", function () {
  get_next_single();
});

function get_next_single() {
  const xhttp2 = new XMLHttpRequest();
  xhttp2.open("GET", "single-next.html", true);
  xhttp2.send();

  xhttp2.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector("#siguiente").innerHTML = this.responseText;
      
    }
  };
}
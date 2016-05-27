//funktsioon kutsutakse välja lehe uuesti laadimisel
arvutaKogus();

function arvutaKogus() {
  var inputKogus = document.getElementsByClassName('tootekogus');
  var parentDiv = document.getElementById('div-tabel');
  var childDiv = document.createElement('div');



  var nullKogus = 0;
  for (var i = 0; i < inputKogus.length; i++) {
    nullKogus = nullKogus + parseInt(inputKogus[i].value);
  }

  childDiv.textContent = 'Tooteid kokku: ' + nullKogus;
  parentDiv.appendChild(childDiv);
}

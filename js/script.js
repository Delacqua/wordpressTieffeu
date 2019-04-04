//Buttom go top
var scrollFunc = function () {
    var y = window.scrollY;
    if (y >= 800) {
    	document.getElementById("backTop").style.opacity = "1";
    } else {
    	document.getElementById("backTop").style.opacity = "0";
    }
};

// -----

var countString2 = function () {
  var node = document.getElementById('textMenu'),
  htmlContent = node.innerHTML,
  textContent = node.textContent;
  console.log(textContent);
  var res = textContent.split(" ");
  console.log(res);
};

// Submenu - aggiusta parole  
function prendeElement(nomeClasse) {
  return document.getElementsByClassName("textMenu");
}

function divideStringInParole(stringInterna) {
  var textContent = stringInterna;
  var res = textContent.split(" ");
  return res;
}

function replaceAt(string, index, replace) {
  return string.substring(0, index) + replace + string.substring(index + 1);
}

function divideParola(string, index, replace) {
  return [string.slice(0, index), replace, string.slice(index)].join('')
}

var countString = function (arrayParole) {
    var check = 0;
    var numeroMaximo = 11;

    for (var i = 0; i < arrayParole.length; i++) {
        
        //check = arrayParole[i].length - numeroMaximo;

        //if (arrayParole[i].length > numeroMaximo) { 
        if (check < arrayParole[i].length - numeroMaximo) {
          check = arrayParole[i].length - numeroMaximo;
        }
    }

    return check;
}

var checkMisure = function () {

  var elements = document.getElementsByClassName("textMenu");

  for(var i=0; i<elements.length; i++) {
      var arrayParole = divideStringInParole(elements[i].textContent);
      var check = countString(arrayParole);

      if (check>1) {
        var size = 1.5 - (check * 0.07);
        if (size < 1) { size = 1;}
        elements[i].style = 'font-size:' + size + 'rem;';
      }
  }

};
// ----
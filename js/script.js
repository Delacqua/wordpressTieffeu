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
    var check = false;
    var numeroMaximo = 11;
    var inte = "- ";

    for (var i = 0; i < arrayParole.length; i++) {
        
        if (arrayParole[i].length > numeroMaximo) { 
          //var stringR = divideParola(arrayParole[i], numeroMaximo, inte);

          check = true;
        }
    }

    return check;
}

var checkMisure = function () {

  var elements = document.getElementsByClassName("textMenu");

  for(var i=0; i<elements.length; i++) {
      var arrayParole = divideStringInParole(elements[i].textContent);
      
      if (countString(arrayParole)) {
        elements[i].style = 'font-size: 1rem;'
      }
  }

};
// ----
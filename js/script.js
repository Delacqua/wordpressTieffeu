var scrollFunc = function () {
    var y = window.scrollY;
    if (y >= 800) {
    	document.getElementById("backTop").style.opacity = "1";
    } else {
    	document.getElementById("backTop").style.opacity = "0";
    }
};

function callListener () {
	window.addEventListener("scroll", scrollFunc);
	alert("Hello! I am an alert box!!");
}

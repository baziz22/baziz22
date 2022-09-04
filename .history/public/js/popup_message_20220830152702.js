var link = document.getElementById("link");
var popup = document.querySelector(".popup-window");
var close = document.getElementById("popup-close");
var ok = document.querySelector(".submit");
function popup_it() {
  popup.style.transform = "translate(0%,-50%) scale(1)";
  popup.style.opacity = "1";
};
close.onclick = function () {
  popup.style.transform = "translate(0%,-250%) scale(0.1)";
  popup.style.opacity = "0";
};

ok.onclick = function () {
  popup.style.transform = "translate(0%,-250%) scale(0.1)";
  popup.style.opacity = "0";
};

window.onload = function () {};


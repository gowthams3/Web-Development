var mainText = document.getElementById("main-text");
var btnIncrease = document.getElementById("btn-increase");
var btnDecrease = document.getElementById("btn-decrease");

var initialSize = window.getComputedStyle(mainText).fontSize;
initialSize = parseInt(initialSize.substr(0,(initialSize.length - 2)));

btnIncrease.onclick = function(){
    initialSize += 20;
    mainText.style.fontSize = initialSize + "px";
}
btnDecrease.onclick = function(){
    initialSize -= 20;
    mainText.style.fontSize = initialSize + "px";
}
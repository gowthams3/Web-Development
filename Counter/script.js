console.log('JS Loaded')

var countDownElement = document.getElementById('counter');
var bgImageElement = document.getElementById('background');

var initialCountdownVal = countDownElement.innerHTML;

setInterval(function(){

    initialCountdownVal = initialCountdownVal>0 ? initialCountdownVal-1:0;
    countDownElement.innerHTML = initialCountdownVal;

    var backImagePath = initialCountdownVal % 2 === 0 ? 'images/img1.jpg':'images/img2.jpg';
    bgImageElement.src = backImagePath;
}, 1000);
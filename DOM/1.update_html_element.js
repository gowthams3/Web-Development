let countdown = document.getElementById('number');

let backgroundImgElement = document.getElementById('background-img');

let initialCountdown = countdown.innerHTML;

setInterval(function(){
    initialCountdown = initialCountdown >0 ? initialCountdown-1 : 0;
    
    countdown.innerHTML = initialCountdown;

    let backgroundImg = initialCountdown % 2 === 0 ? 'images/bg1.jpg' : 'images/bg2.jpg';

    backgroundImgElement.src = backgroundImg;
},1000);


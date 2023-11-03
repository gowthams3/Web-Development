var countdownValue = document.getElementById('number');

var initialCountdownValue = countdownValue.innerHTML;

var backgroundImgPath = document.getElementById('bg-image');

console.log(initialCountdownValue);

var interval = setInterval(function(){
    initialCountdownValue = initialCountdownValue > 0 ? initialCountdownValue - 1 : 0 ; 

    countdownValue.innerHTML = initialCountdownValue;

    countdownValue.style.fontSize= initialCountdownValue * 90 +"px";

    backgroundImgPath.style.width = initialCountdownValue * 10 + "%";

    if(initialCountdownValue <= 0)
    clearInterval(interval);
},1000)
var number = document.getElementById("number");

var initialCount = 0;

setInterval(()=>{
    if(initialCount==75){
        clearInterval();
    }
    else
    {
    initialCount += 1;
    number.innerHTML = initialCount + "%";
    }
    
},25);
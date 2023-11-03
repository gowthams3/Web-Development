var over = document.getElementById('over');
var Count = 0;
over.addEventListener('mouseover',function(){
    var CountElement = document.querySelector('#over > p');
    Count += 1;
    CountElement.innerHTML = Count;
});

var over = document.getElementById('enter');
var Count = 0;
over.addEventListener('mouseenter',function(){
    var CountElement = document.querySelector('#enter > p');
    Count += 1;
    CountElement.innerHTML = Count;
});

var over = document.getElementById('move');
var Count = 0;
over.addEventListener('mousemove',function(){
    var CountElement = document.querySelector('#move > p');
    Count += 1;
    CountElement.innerHTML = Count;
});

var clickBtn = document.getElementById('btn');

function disply(){
    var show = document.getElementById('hidden');
    show.style.display = "flex";
};
clickBtn.onclick = disply;
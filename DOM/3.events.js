var btn = document.getElementById('button-click');
var background = document.getElementById('background');

function onBtnClick(){
    btn.style.backgroundColor = "rgb("+ Math.floor(Math.random()*255) + "," + Math.floor(Math.random()* 255)+"," + Math.floor(Math.random()* 255) + ")";;
    background.style.backgroundColor = "rgb("+ Math.floor(Math.random()*255) + "," + Math.floor(Math.random()* 255)+"," + Math.floor(Math.random()* 255) + ")";
}
btn.onclick = onBtnClick;

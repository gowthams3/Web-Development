
var show = document.getElementById("show-menu");
let body = document.querySelector('body');
let rotate = document.getElementsByClassName("plus");

let valueDisplay = document.querySelectorAll('.counter');
let interval = 5000;


function showMenu(){
    show.style.width = "100%";
    show.style.translate = "248px";
}
function closeMenu(){
    show.style.width = "0px";
    show.style.translate = "-248px"
}
document.getElementById("show-menu").addEventListener('click', function(){
   closeMenu();
});

valueDisplay.forEach(valueDisplay => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function(){
        startValue +=10;
        valueDisplay.textContent = startValue;
        if(startValue == endValue){
            clearInterval(counter);
        }
    }, duration);
});

let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

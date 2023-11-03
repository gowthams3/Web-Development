let aBox = document.getElementById('abox');
let sbox = document.getElementById('sbox');
let dbox = document.getElementById('dbox');
let fbox = document.getElementById('fbox');
let gbox = document.getElementById('gbox');
let hbox = document.getElementById('hbox');
let jbox = document.getElementById('jbox');
let kbox = document.getElementById('kbox');
let lbox = document.getElementById('lbox');

let clap = document.getElementById('audio');
let hihat = document.getElementById('hihat');
let openchat = document.getElementById('openchat');
let boom = document.getElementById('boom');
let ride = document.getElementById('ride');
let snare = document.getElementById('snare');
let tom = document.getElementById('tom');
let tink = document.getElementById('tink');
let kick = document.getElementById('kick');


document.body.addEventListener('keydown', function(e){
    let keyCode = e.keyCode;

    if(keyCode=== 65 || keyCode === 97)
    {
        aBox.style.border = "3px solid gold";
        clap.play();
    }
    else if(keyCode === 83 || keyCode === 115)
    {
        sbox.style.border = '3px solid gold';
        hihat.play();
    }
    else if(keyCode === 68)
    {
        dbox.style.border = '3px solid gold';
        kick.play();
    }
    else if(keyCode === 70)
    {
        fbox.style.border = '3px solid gold';
        openchat.play();
    }
    else if(keyCode === 71)
    {
        gbox.style.border = '3px solid gold';
        boom.play();
    }
    else if(keyCode === 72)
    {
        hbox.style.border = '3px solid gold';
        ride.play();
    }
    else if(keyCode === 74)
    {
        jbox.style.border = '3px solid gold';
        snare.play();
    }
    else if(keyCode === 75)
    {
        kbox.style.border = '3px solid gold';
        tom.play();
    }
    else if(keyCode === 76)
    {
        lbox.style.border = '3px solid gold';
        tink.play();
    }
    else{

    }

    console.log(keyCode);
})

document.body.addEventListener('keyup', function(e){
    let keyCode = e.keyCode;

    if(keyCode=== 65 || keyCode === 97)
    {
        aBox.style.border = "3px solid black";
    }
    else if(keyCode === 83 || keyCode === 115)
    {
        sbox.style.border = '3px solid black'
    }
    else if(keyCode === 68)
    {
        dbox.style.border = '3px solid black'
    }
    else if(keyCode === 70)
    {
        fbox.style.border = '3px solid black'
    }
    else if(keyCode === 71)
    {
        gbox.style.border = '3px solid black'
    }
    else if(keyCode === 72)
    {
        hbox.style.border = '3px solid black'
    }
    else if(keyCode === 74)
    {
        jbox.style.border = '3px solid black'
    }
    else if(keyCode === 75)
    {
        kbox.style.border = '3px solid black'
    }
    else if(keyCode === 76)
    {
        lbox.style.border = '3px solid black'
    }

    console.log(keyCode);
})
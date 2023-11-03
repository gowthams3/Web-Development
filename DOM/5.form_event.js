var userName = document.getElementById("username");
var password = document.getElementById("password");

userName.addEventListener('input', function(event){
    var currentValue = event.target.value;
    currentValue = currentValue.toUpperCase();
    console.log(currentValue);
    userName.value = currentValue;
})
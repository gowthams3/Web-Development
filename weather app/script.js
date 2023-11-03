const notificationElement = document.querySelector(".notification");
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".description p");
const locationElement = document.querySelector(".location p");


function displayWeather(){
    iconElement.innerHTML = `<img src="icon/${weather.iconId}.png"/>`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
}

function celsiusToFahrenheit(temperature){
    return (temperature * 9/5) + 32;
}
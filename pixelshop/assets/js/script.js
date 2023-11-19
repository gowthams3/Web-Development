
// Navbar Color Change
window.addEventListener('scroll', function() {
    var navbar = document.getElementById('myNavbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled'); // Apply a class when scrolling
    } else {
        navbar.classList.remove('scrolled'); // Remove the class when at the top
    }
});


window.addEventListener('scroll', function() {
    var navLinks = document.getElementById('navLinks').getElementsByTagName('a');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 0) {
        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].style.color = 'black';
        }
    } else {
        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].style.color = ''; 
        }
    }
});
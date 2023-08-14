let $homeNavLink

// Initial page load
$(document).ready(function() {
    $homeNavLink = $('#Home');

    // Make the current page active.
    $homeNavLink.addClass('active')
});

// Light Mode Toggle Button
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");

    var imageElement = document.getElementById("image")
    if (element.classList.contains("dark-mode")) {
        imageElement.src = "images/newAeviWebLogo.png";
    } else {
        imageElement.src = "images/newAeviWebLogoinvert.png";
    }
}


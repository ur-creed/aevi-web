let $portfolioNavLink;

// Initial page load
$(document).ready(function(){
    $portfolioNavLink = $('#Portfolio');
    // Make the current page active.
    $portfolioNavLink.addClass('active');
});

// Light Mode Toggle Button
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}
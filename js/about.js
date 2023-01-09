let $aboutNavLink;

// Initial page load
$(document).ready(function(){
    $aboutNavLink = $('#About');

    // Make the current page active.
    $aboutNavLink.addClass('active');
});

function lightMode() {
    var element = document.body;
    element.classList.toggle("light-mode");
}

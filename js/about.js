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



const darkButton = document.getElementById("myButton");

const btn = document.getElementById("myButton");

btn.addEventListener('click', function handleClick () {
    const initialText = 'Light Mode';

    if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
        btn.textContent = 'Dark Mode';
} else {
        btn.textContent = initialText;
    }
});

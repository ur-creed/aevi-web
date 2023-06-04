let $aboutNavLink;

// Initial page load
$(document).ready(function(){
    $aboutNavLink = $('#About');

    // Make the current page active.
    $aboutNavLink.addClass('active');

    // Change Text Inside Button
    const btn = $("#myButton");

    btn.on('click', function handleClick () {
        const initialText = 'Light Mode'; // dark mode text

        if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
            btn.textContent = 'Dark Mode'; // light mode text
        } else {
            btn.textContent = initialText;
        }
    });
});

// Light Mode Toggle Button
function lightMode() {
    var element = document.body;
    element.classList.toggle("light-mode");
}
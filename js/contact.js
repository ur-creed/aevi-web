let $contactNavLink,
    $contactForm;

// Initial page load
$(document).ready(function(){
    $contactNavLink = $('#Contact');
    $contactForm = $('#ContactForm');

    // Make the current page active.
    $contactNavLink.addClass('active');
});
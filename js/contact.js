let $contactNavLink,
    $contactForm,
    $successAlert,
    $dangerAlert;

// Handle form submission
function handleFormSubmission(formData) {
    $.ajax({
        url: 'contactsubmit.php',
        method: 'POST',
        data: formData
    }).done(function (data){
        let isSuccessful = data === '200';
        if(isSuccessful) {
            $successAlert.removeClass('visually-hidden');
        } else {
            $dangerAlert.removeClass('visually-hidden');
        }
    });
}

// Initial page load
$(document).ready(function(){
    $contactNavLink = $('#Contact');
    $contactForm = $('#ContactForm');
    $successAlert = $('#SuccessAlert');
    $dangerAlert = $('#DangerAlert');

    // Make the current page active.
    $contactNavLink.addClass('active');

    $contactForm.submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        handleFormSubmission(formData);
    });
});

// Light Mode Toggle Button
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}
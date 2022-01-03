let $contactForm,
    $existingProjectButton,
    $newProjectButton,
    $packageSelect,
    $pricingNavLink,
    $successAlert,
    $dangerAlert;

// Handle what happens when "New" button is click
function handleNewProjectButtonClick() {
    $newProjectButton.click(function() {
        $packageSelect.value = "new"
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#PricingContactForm").offset().top
        }, 250);
    });
}

// Handle what happens when "Maintenance" button is click
function handleExistingProjectButtonClick() {
    $existingProjectButton.click(function() {
        $packageSelect.value = "existing"
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#PricingContactForm").offset().top
        }, 250);
    });
}

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
    $pricingNavLink = $('#Pricing');
    $contactForm = $('#PricingContactForm');
    $newProjectButton = $('#NewProjectButton');
    $existingProjectButton = $('#ExistingProjectButton');
    $packageSelect = $('#PackageSelect')[0];
    $successAlert = $('#SuccessAlert');
    $dangerAlert = $('#DangerAlert');

    // Make the current page active.
    $pricingNavLink.addClass('active');

    handleNewProjectButtonClick();
    handleExistingProjectButtonClick();

    $contactForm.submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        handleFormSubmission(formData);
    });

});
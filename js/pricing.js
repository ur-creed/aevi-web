let $contactForm,
    $existingProjectButton,
    $newProjectButton,
    $packageSelect,
    $pricingNavLink;

// Handle what happens when "New" button is click
function HandleNewProjectButtonClick() {
    $newProjectButton.click(function() {
        $packageSelect.value = "new"
    });
}

// Handle what happens when "Maintenance" button is click
function HandleExistingProjectButtonClick() {
    $existingProjectButton.click(function() {
        $packageSelect.value = "maintenance"
    });
}

// Initial page load
$(document).ready(function(){
    $pricingNavLink = $('#Pricing');
    $contactForm = $('#PricingContactForm');
    $newProjectButton = $('#NewProjectButton');
    $existingProjectButton = $('#ExistingProjectButton');
    $packageSelect = $('#PackageSelect')[0];

    // Make the current page active.
    $pricingNavLink.addClass('active');

    HandleNewProjectButtonClick();
    HandleExistingProjectButtonClick();
});
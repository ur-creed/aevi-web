let $homeNavLink

// Initial page load
$(document).ready(function() {
    $homeNavLink = $('#Home');

    // Make the current page active.
    $homeNavLink.addClass('active')

    let length = prompt('What is your length?', 0);
    length = Number(length);

    let width = prompt('What is your width?', 0);
    width = Number(width);

    let total = length * width * 5;

    console.log(total);



    const typeOfDrive = prompt('Would you like gravel, asphalt, or concrete?');

    let park = prompt('How many extra parking spaces?', 0);
    park = Number(park);

    let driveway = function (typeOfDrive) {
        if (typeOfDrive == 'concrete') {
            driveway = 1000;
        }
        else if (typeOfDrive == 'asphalt') {
            driveway = 500;
        }

        else if (typeOfDrive == 'gravel') {
            driveway = 0;
        }

        else {
            'Please enter a valid entry!'
        }
    }

    driveway(typeOfDrive);


    let Expark = park * 100;


    const totalCost = total + driveway + Expark;

    console.log(totalCost);
//console.log(Your total estimate will be $${totalCost}.)
});


let $aboutNavLink;

// Initial page load
$(document).ready(function(){
    $aboutNavLink = $('#About');

    // Make the current page active.
    $aboutNavLink.addClass('active');

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0}, 800);
        return false;
    });

});
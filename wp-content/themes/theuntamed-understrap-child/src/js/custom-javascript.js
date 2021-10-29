// Add your custom JS here.
// add padding top to show content behind navbar

jQuery('body').css('padding-top', jQuery('.navbar').outerHeight() + 'px')

// detect scroll top or down
if (jQuery('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    jQuery(window).on('scroll', function() {
        var scroll_top = jQuery(this).scrollTop();
        if(scroll_top < last_scroll_top) {
            jQuery('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        }
        else {
            jQuery('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        last_scroll_top = scroll_top;
    });
}
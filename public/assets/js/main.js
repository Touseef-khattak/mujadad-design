
$(window).on('scroll', function () {
    var scrollPosition = $(this).scrollTop();

    if (scrollPosition > lastScrollTop) {
        // Scroll down
        $('.navbar-container').addClass('hide-navbar');
        $('.navbar-container').removeClass('show-navbar');
    } else {
        // Scroll up
        $('.navbar-container').removeClass('hide-navbar');
        $('.navbar-container').addClass('show-navbar');
    }

    lastScrollTop = scrollPosition;
});
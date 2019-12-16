jQuery(document).ready(function ($) {
    $('.small-menu-item').click(function (event) {
        $('.small-menu-item').removeClass('active-link');
        $(this).addClass('active-link');
        var status = $(this).attr('data-name');
        $('html, body').animate({
            scrollTop: $("#" + status).offset().top - 20
        }, 1000);
    });
});
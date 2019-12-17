jQuery(document).ready(function ($) {
    $('.small-menu-item').click(function (event) {
        $('.small-menu-item').removeClass('active-link');
        $(this).addClass('active-link');
        var status = $(this).attr('data-name');
        var hash = jQuery(this).attr('href');
        var el = jQuery(hash);
        var top = el.offset().top;
        $('html, body').animate({
            scrollTop: $("#" + status).offset().top - 20
        }, 300, 'swing');
    });
});

window.laytheme.on('newpageshown', function(){
    var hash = window.location.hash; 
    var el = jQuery(hash);
    if(el.length > 0) {
        var top = el.offset().top;
        window.scroll(0, top);        
    }
});
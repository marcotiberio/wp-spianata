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

jQuery(document).on( 'click', 'a[href^="#"]', function(e){
    e.preventDefault();
    var hash = jQuery(this).attr('href');
    var el = jQuery(hash);
    var top = el.offset().top;
    jQuery('html, body').animate({
        scrollTop: top
    }, 300, 'swing',
        function() {
            window.location.hash = hash;
        }
    );
} );

window.laytheme.on('newpageshown', function(){
    var hash = window.location.hash; 
    var el = jQuery(hash);
    if(el.length > 0) {
        var top = el.offset().top;
        window.scroll(0, top);        
    }
});
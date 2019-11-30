jQuery(document).ready(function ($) {
    var duration = 120000;
    $('.move-left .marquee').marquee({
        duration: duration,
        gap: 10,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true
    });
    $('.move-right .marquee').marquee({
        duration: duration,
        gap: 10,
        delayBeforeStart: 0,
        direction: 'right',
        duplicated: true
    });
});


$(document).on("click", "add_to_cart_button ajax_add_to_cart", function() {   
    var Path = $('.add-to-cart').html("Added!");           
    var success = function() { alert("Successful"); };     
    var error = function(message) { alert("Oopsie! " + message); };
});
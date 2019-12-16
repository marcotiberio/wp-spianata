jQuery(document).ready(function ($) {
    $("#spianata-title").hover( function() { $("#spianata-image").toggle(); } );
    $("#catering-title").hover( function() { $("#catering-image").toggle(); } );
    $("#classes-title").hover( function() { $("#classes-image").toggle(); } );
    $("#instagram-title").hover( function() { $("#instagram-image").toggle(); } );
});

// $('input[type=checkbox]').change(function(){
//     if($(this).is(":checked")) {
//         $('div.shipping_address').addClass("showdifferentaddress");
//     } else {
//         $('div.shipping_address').removeClass("showdifferentaddress");
//     }
// });

$('#ship-to-different-address-checkbox').change(function() {
    $(this).next('div').toggle();
});
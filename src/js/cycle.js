jQuery(document).ready(function ($) {
    $("#spianata-title").hover( function() { $("#spianata-image").toggle(); } );
    $("#catering-title").hover( function() { $("#catering-image").toggle(); } );
    $("#classes-title").hover( function() { $("#classes-image").toggle(); } );
    $("#instagram-title").hover( function() { $("#instagram-image").toggle(); } );
});

jQuery(document).ready(function ($) {
    $('#ship-to-different-address-checkbox').change(function(){
        if($(this).is(":checked")) {
            $('div.shipping_address').addClass("show-checkbox-div");
        } else {
            $('div.shipping_address').removeClass("show-checkbox-div");
        }
    });
});

// jQuery(document).ready(function ($) {
//     $('#createaccount').change(function(){
//         if($(this).is(":checked")) {
//             $('div.create-account').addClass("show-checkbox-div");
//         } else {
//             $('div.create-account').removeClass("show-checkbox-div");
//         }
//     });
// });
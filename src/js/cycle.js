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

var countChecked = function () {
    var n = $("input:checked").length;
    if (n >= 1) {
        $(".shipping_address").css({
            "visibility": "visible"
        });
    } else {
        $(".shipping_address").css({
            "visibility": "hidden"
        });
    }
};
countChecked();

$("input[type=checkbox]").on("click", countChecked);
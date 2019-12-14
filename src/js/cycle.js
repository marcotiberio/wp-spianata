jQuery(document).ready(function ($) {
    $("#spianata-title").hover( function() { $("#spianata-image").toggle(); } );
    $("#catering-title").hover( function() { $("#catering-image").toggle(); } );
    $("#classes-title").hover( function() { $("#classes-image").toggle(); } );
    $("#instagram-title").hover( function() { $("#instagram-image").toggle(); } );
});

$(function () {
    $("#ship-to-different-address-checkbox").click(function () {
        if ($(this).is(":checked")) {
            $(".woocommerce-shipping-fields__field-wrapper").show();
        } else {
            $(".woocommerce-shipping-fields__field-wrapper").hide();
        }
    });
});
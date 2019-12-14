jQuery(document).ready(function ($) {
    $("#spianata-title").hover( function() { $("#spianata-image").toggle(); } );
    $("#catering-title").hover( function() { $("#catering-image").toggle(); } );
    $("#classes-title").hover( function() { $("#classes-image").toggle(); } );
    $("#instagram-title").hover( function() { $("#instagram-image").toggle(); } );
});

$(document).ready(function(){
    $('#ship-to-different-address-checkbox').change(function(){
        if(this.checked)
            $('.woocommerce-shipping-fields__field-wrapper').fadeIn('slow');
        else
            $('.woocommerce-shipping-fields__field-wrapper').fadeOut('slow');

    });
});
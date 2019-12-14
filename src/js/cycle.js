jQuery(document).ready(function ($) {
    $("#spianata-title").hover( function() { $("#spianata-image").toggle(); } );
    $("#catering-title").hover( function() { $("#catering-image").toggle(); } );
    $("#classes-title").hover( function() { $("#classes-image").toggle(); } );
    $("#instagram-title").hover( function() { $("#instagram-image").toggle(); } );
});

$('input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $('div.woocommerce-shipping-fields__field-wrapper').addClass("showdifferentaddress");
    } else {
        $('div.woocommerce-shipping-fields__field-wrapper').removeClass("showdifferentaddress");
    }
});

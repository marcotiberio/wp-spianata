// window.onresize = function() {
//     location.reload();
// }

$('input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $('div.shipping_address').addClass("showdifferentaddress");
    } else {
        $('div.shipping_address').removeClass("showdifferentaddress");
    }
});

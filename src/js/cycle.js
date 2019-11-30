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


$('.ajax_add_to_cart').click(function() {
    var self = $(this);
    if (!self.data('add')) {
        self.data('add', true);
        self.text('Item added');
        setTimeout(function() {
            self.text('Add to Cart').data('add', false);
        }, 2000);
    }
});
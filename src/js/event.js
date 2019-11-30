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
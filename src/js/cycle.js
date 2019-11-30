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

var node = document.getElementsByClassName('ajax_add_to_cart')[0];

node.onmouseover = function(e) {
 node.innerHTML = "Don't move!";
}

node.onmouseout = function(e) {
  node.innerHTML = "Hover";
}